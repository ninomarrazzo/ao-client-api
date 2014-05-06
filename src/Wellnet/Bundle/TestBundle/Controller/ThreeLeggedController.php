<?php

namespace Wellnet\Bundle\TestBundle\Controller;

use Guzzle\Http\Message\RequestInterface;
use Guzzle\Plugin\Oauth\OauthPlugin;
use Monolog\Logger;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Guzzle\Http\Client;
use Guzzle\Http\QueryString;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeFileSessionHandler;
use Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage;

class ThreeLeggedController extends BaseClientController {

  protected $request_token_uri;
  protected $authorize_uri;
  protected $access_token_uri;
  protected $consumer_key;
  protected $consumer_secret;

  /**
   * @param Request $request
   *
   * @return Response
   */
  public function serviceAction(Request $request) {
    $this->request_token_uri = $this->container->getParameter('request_token_uri');
    $this->authorize_uri = $this->container->getParameter('authorize_uri');
    $this->access_token_uri = $this->container->getParameter('access_token_uri');
    $this->consumer_key = $this->container->getParameter('consumer_key_3legged');
    $this->consumer_secret = $this->container->getParameter('consumer_secret_3legged');

    /** @var Logger $logger */
    $logger = $this->container->get('logger');

    $session = new Session();
    $session->start();

    $request_token_secret = $session->get('request_token_secret');
    $access_token = $session->get('access_token');

    //$data = array();
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
      return new RedirectResponse($this->generateUrl('wellnet_test_3legged'));
    }
  }

  /**
   *
   */
  public function destroyAction() {
    $session = new Session();
    $session->invalidate();

    return new RedirectResponse($this->generateUrl('wellnet_test_3legged'));
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
