<?php

namespace Wellnet\Bundle\TestBundle\Controller;

use Guzzle\Plugin\Oauth\OauthPlugin;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Guzzle\Plugin\Cookie\CookieJar\ArrayCookieJar;
use Guzzle\Plugin\Cookie\CookiePlugin;
use Guzzle\Http\Client;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class BaseClientController extends Controller {

  /**
   * Gets a client.
   *
   * @param $request
   *
   * @return Client
   */
  protected function getSessionClient(Request $request) {
    $client = new Client($this->container->getParameter('server_url'));

    $cookiePlugin = new CookiePlugin(new ArrayCookieJar());
    $client->addSubscriber($cookiePlugin);

    $request = $client->post('/en/api/1.0/user/login', NULL, array(
      'username' => $this->container->getParameter('username'),
      'password' => $this->container->getParameter('password')
    ));
    $request->send();

    // protected methods (POST, PUT, DELETE) requires a token in header
    $this->setCSRFToken($client);

    return $client;
  }

  /**
   * Gets a client.
   *
   * @param $request
   *
   * @return Client
   */
  protected function getOauthClient(Request $request) {
    $session = new Session();
    $session->start();

    $client = new Client();

    $oauth = new OauthPlugin(array(
      'consumer_key' => $this->container->getParameter('consumer_key_3legged'),
      'consumer_secret' => $this->container->getParameter('consumer_secret_3legged'),
      'token' => $session->get('access_token'),
      'token_secret' => $session->get('access_token_secret'),
    ));
    $client->addSubscriber($oauth);

    return $client;
  }

  /**
   * @return string
   */
  protected function getBaseUrl() {
    $server_url = $this->container->getParameter('server_url');
    return "{$server_url}/en/api_3_legs/1.0";
  }

  /**
   * Gets a client to do PUT request. Don't use
   * post parameters to compute the oauth signature.
   *
   * @param $request
   *
   * @return Client
   */
  protected function getOauthPutClient(Request $request) {
    $session = new Session();
    $session->start();

    $client = new Client();

    $oauth = new OauthPlugin(array(
      'consumer_key' => $this->container->getParameter('consumer_key_3legged'),
      'consumer_secret' => $this->container->getParameter('consumer_secret_3legged'),
      'token' => $session->get('access_token'),
      'token_secret' => $session->get('access_token_secret'),
      'disable_post_params' => TRUE,
    ));
    $client->addSubscriber($oauth);

    return $client;
  }

  /**
   * Gets the current token from the server
   *
   * @param Client $client
   *
   * @return string
   */
  protected function setCSRFToken($client) {
    $request = $client->get('/services/session/token');
    $token = $request->send()->getBody(TRUE);
    $client->setDefaultOption('headers', array('X-CSRF-TOKEN' => $token));
  }

}
