<?php

namespace Wellnet\Bundle\TestBundle\Controller;

use Guzzle\Plugin\Cookie\CookieJar\ArrayCookieJar;
use Guzzle\Plugin\Cookie\CookiePlugin;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Guzzle\Http\Client;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller {

  /**
   * @return Response
   */
  public function indexAction() {
    return $this->render('WellnetTestBundle:Default:index.html.twig');
  }

  /**
   * @return Response
   */
  public function collaudoAction() {
    return $this->render('WellnetTestBundle:Default:collaudo.html.twig');
  }

  /**
   * @return Response
   */
  public function twoleggedAction() {
    return $this->render('WellnetTestBundle:Default:twolegged.html.twig');
  }

  /**
   * @return Response
   */
  public function threeleggedAction() {
    return $this->render('WellnetTestBundle:Default:threelegged.html.twig');
  }

  /**
   * @return Response
   */
  public function helpAction() {
    return $this->render('WellnetTestBundle:Default:help.html.twig');
  }

}
