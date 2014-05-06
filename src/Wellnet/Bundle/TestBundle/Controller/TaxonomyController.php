<?php

namespace Wellnet\Bundle\TestBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class TaxonomyController extends BaseClientController {

  /**
   * @return Response
   */
  public function createAction() {
    return $this->redirect('wellnet_test_homepage');
  }

  /**
   * @param Request $request
   * @param $type
   *
   * @return Response
   */
  public function indexAction(Request $request, $type) {
    $client = $this->getOauthClient($request);

    $request = $client->get("{$this->getBaseUrl()}/node");
    $query = $request->getQuery();
    $query->set('parameters', array('type' => $type));
    $data = $request->send();

    return $this->render('WellnetTestBundle:Default:response.html.twig', array('data' => $data));
  }

  /**
   * @param Request $request
   * @param $nid
   *
   * @return Response
   */
  public function getAction(Request $request, $nid) {
    $client = $this->getOauthClient($request);

    $request = $client->get("{$this->getBaseUrl()}/node/{$nid}");
    $data = $request->send();

    return $this->render('WellnetTestBundle:Default:response.html.twig', array('data' => $data));
  }
}
