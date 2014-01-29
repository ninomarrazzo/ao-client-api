<?php

namespace Wellnet\Bundle\TestBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class WebformController extends BaseClientController {

  /**
   * @param Request $request
   *
   * @return Response
   */
  public function indexWebformAction(Request $request) {
    $client = $this->getClient($request);

    $request = $client->get('/en/api/1.0/webform');
    $data = $request->send();

    return $this->render('WellnetTestBundle:Default:response.html.twig', array('data' => $data));
  }

  /**
   * @param Request $request
   * @param $nid
   *
   * @return Response
   */
  public function getWebformAction(Request $request, $nid) {
    $client = $this->getClient($request);

    $request = $client->get("/en/api/1.0/webform/{$nid}");
    $data = $request->send();

    return $this->render('WellnetTestBundle:Default:response.html.twig', array('data' => $data));
  }

  /**
   * @param Request $request
   * @param $nid
   *
   * @return Response
   */
  public function getSubmissionAction(Request $request, $nid) {
    $client = $this->getClient($request);

    $request = $client->get("/en/api/1.0/webform/{$nid}/submissions");
    $data = $request->send();

    return $this->render('WellnetTestBundle:Default:response.html.twig', array('data' => $data));
  }
}
