<?php

namespace Wellnet\Bundle\TestBundle\Controller;

use Guzzle\Plugin\Oauth\OauthPlugin;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Guzzle\Http\Client;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeFileSessionHandler;
use Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage;

class ThreeLeggedController extends BaseClientController {

  private $request_token_uri;
  private $authorize_uri;
  private $access_token_uri;
  private $consumer_key;
  private $consumer_secret;
  private $resource_uri;

  /**
   * @param Request $request
   *
   * @return Response
   */
  public function indexAction(Request $request) {
    $this->request_token_uri = $this->container->getParameter('request_token_uri');
    $this->authorize_uri = $this->container->getParameter('authorize_uri');
    $this->access_token_uri = $this->container->getParameter('access_token_uri');
    $this->consumer_key = $this->container->getParameter('consumer_key_3legged');
    $this->consumer_secret = $this->container->getParameter('consumer_secret_3legged');
    $this->resource_uri = $this->container->getParameter('resource_uri');

    $storage = new NativeSessionStorage(array(), new NativeFileSessionHandler());
    $session = new Session($storage);
    $session->start();

    $request_token_secret = $session->get('request_token_secret');
    $access_token = $session->get('access_token');

    $data = array();
    if (empty($request_token_secret)) {
      $request_token_array = $this->getRequestToken($this->request_token_uri);
      $session->set('request_token', $request_token_array['oauth_token']);
      $session->set('request_token_secret', $request_token_array['oauth_token_secret']);
      return $this->redirect("{$this->authorize_uri}?oauth_token=" . $session->get('request_token')); // takes you to Drupal authorize page
    }
    else {
      if (empty($access_token)) { // continues below
        $session->set('oauth_token', ($request->get('oauth_token')));
        $access_token_info = $this->getAccessToken($this->access_token_uri, $session);
        $session->set('access_token', $access_token_info['oauth_token']);
        $session->set('access_token_secret', $access_token_info['oauth_token_secret']);

        $access_token = $access_token_info['oauth_token'];
      }
    }
    if (isset ($access_token)) {
      $data = $this->fetch($this->resource_uri, $session); // all that hard work just to get this line working
    }

    return $this->render('WellnetTestBundle:Default:response.html.twig', array('data' => $data));
  }

  /**
   * Requests a new OAuth token.
   *
   * @param $request_token_uri
   *
   * @return array
   */
  private function getRequestToken($request_token_uri) {
    $client = new Client($request_token_uri);
    $oauth = new OauthPlugin(array(
      'consumer_key' => $this->consumer_key,
      'consumer_secret' => $this->consumer_secret,
    ));
    $client->addSubscriber($oauth);

    $request = $client->get();
    $response = $request->send()->getBody(TRUE);

    $data = $this->parseResponse($response);
    return $data;
  }

  /**
   * Gets a new access token based on the OAuth token.
   *
   * @param $access_token_uri
   * @param Session $session
   *
   * @return array $array
   */
  private function getAccessToken($access_token_uri, $session) {
    $client = new Client($access_token_uri);
    $oauth = new OauthPlugin(array(
      'consumer_key' => $this->consumer_key,
      'consumer_secret' => $this->consumer_secret,
      'token' => $session->get('oauth_token'),
      'token_secret' => $session->get('request_token_secret'),
    ));
    $client->addSubscriber($oauth);

    $request = $client->get();
    $response = $request->send()->getBody(TRUE);
    $data = $this->parseResponse($response);
    return $data;
  }

  /**
   * Fetches the resource using OAuth access token.
   *
   * @param $resource_uri
   * @param Session $session
   *
   * @return array $array
   */
  private function fetch($resource_uri, $session) {
    $client = new Client($resource_uri);
    $oauth = new OauthPlugin(array(
      'consumer_key' => $this->consumer_key,
      'consumer_secret' => $this->consumer_secret,
      'token' => $session->get('access_token'),
      'token_secret' => $session->get('access_token_secret'),
    ));
    $client->addSubscriber($oauth);

    $request = $client->get();
    $response = $request->send();

    return $response;
  }

  /**
   * Parses the response.
   */
  private function parseResponse($response) {
    $parts = explode('&', $response);

    $data = array();
    foreach ($parts as $part) {
      $sub_parts = explode('=', $part);
      $data[$sub_parts[0]] = $sub_parts[1];
    }

    return $data;
  }

}
