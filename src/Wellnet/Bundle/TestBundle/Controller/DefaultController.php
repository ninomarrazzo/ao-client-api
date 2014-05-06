<?php

namespace Wellnet\Bundle\TestBundle\Controller;

use Guzzle\Plugin\Cookie\CookieJar\ArrayCookieJar;
use Guzzle\Plugin\Cookie\CookiePlugin;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Guzzle\Http\Client;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeFileSessionHandler;
use Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage;

class DefaultController extends Controller {

  /**
   * @param string $page
   *
   * @return Response
   */
  public function indexAction($page) {
    return $this->render("WellnetTestBundle:Default:{$page}.html.twig");
  }

  /**
   * @return Response
   */
  public function threeleggedAction() {
    $storage = new NativeSessionStorage(array(), new NativeFileSessionHandler());
    $session = new Session($storage);
    $session->start();

    $access_token = $session->get('access_token');

    return $this->render("WellnetTestBundle:Default:threelegged.html.twig", array('access_token' => $access_token));
  }

}
