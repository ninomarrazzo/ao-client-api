<?php

namespace Wellnet\Bundle\TestBundle\Controller;

use Guzzle\Plugin\Cookie\CookieJar\ArrayCookieJar;
use Guzzle\Plugin\Cookie\CookiePlugin;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Guzzle\Http\Client;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller {

  /**
   * @param string $page
   *
   * @return Response
   */
  public function indexAction($page) {
    return $this->render("WellnetTestBundle:Default:{$page}.html.twig");
  }

}
