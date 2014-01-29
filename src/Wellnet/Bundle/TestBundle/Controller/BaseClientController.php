<?php

namespace Wellnet\Bundle\TestBundle\Controller;

use Guzzle\Plugin\Oauth\OauthPlugin;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Guzzle\Plugin\Cookie\CookieJar\ArrayCookieJar;
use Guzzle\Plugin\Cookie\CookiePlugin;
use Guzzle\Http\Client;
use Symfony\Component\HttpFoundation\Request;

class BaseClientController extends Controller {

  /**
   * Gets a client.
   *
   * @param $request
   *
   * @return Client
   */
  protected function getClient(Request $request) {
    $client = new Client($this->container->getParameter('server_url'));

    $auth = 'oauth';

    // authenticate the call: oauth version
    if ($auth == 'oauth') {
      $oauth = new OauthPlugin(array(
        'consumer_key' => $this->container->getParameter('consumer_key'),
        'consumer_secret' => $this->container->getParameter('consumer_secret'),
      ));
      $client->addSubscriber($oauth);
    }

    // authenticate the call: session version
    else {
      if ($auth == 'session') {
        $cookiePlugin = new CookiePlugin(new ArrayCookieJar());
        $client->addSubscriber($cookiePlugin);

        $request = $client->post('/en/api/1.0/user/login', NULL, array(
          'username' => $this->container->getParameter('username'),
          'password' => $this->container->getParameter('password')
        ));
        $request->send();

        // protected methods (POST, PUT, DELETE) requires a token in header
        $this->setCSRFToken($client);
      }
    }

    return $client;
  }

  /**
   * Gets a client to do PUT request. Don't use
   * post parameters to compute the oauth signature.
   *
   * @param $request
   *
   * @return Client
   */
  protected function getPutClient(Request $request) {
    $client = new Client($this->container->getParameter('server_url'));

    $auth = 'oauth';

    // authenticate the call: oauth version
    if ($auth == 'oauth') {
      $oauth = new OauthPlugin(array(
        'consumer_key' => $this->container->getParameter('consumer_key'),
        'consumer_secret' => $this->container->getParameter('consumer_secret'),
        'disable_post_params' => TRUE,
      ));
      $client->addSubscriber($oauth);
    }

    // authenticate the call: session version
    else {
      if ($auth == 'session') {
        $cookiePlugin = new CookiePlugin(new ArrayCookieJar());
        $client->addSubscriber($cookiePlugin);

        $request = $client->post('/en/api/1.0/user/login', NULL, array(
          'username' => $this->container->getParameter('username'),
          'password' => $this->container->getParameter('password')
        ));
        $request->send();

        // protected methods (POST, PUT, DELETE) requires a token in header
        $this->setCSRFToken($client);
      }
    }

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
