<?php

namespace Wellnet\Bundle\TestBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class StructureController extends ThreeLeggedController {

  /**
   * @param Request $request
   * @param $type
   *
   * @return Response
   */
  public function getStructureAction(Request $request, $type) {
    $client = $this->getClient($request);

    $request = $client->post('/en/api/1.0/structure/get_structure', NULL, array('type' => $type));
    $data = $request->send();

    return $this->render('WellnetTestBundle:Default:response.html.twig', array('data' => $data));
  }

  /**
   * @param Request $request
   * @param $nid
   * @param $state
   *
   * @return Response
   */
  public function changeStateAction(Request $request, $nid, $state) {
    $client = $this->getClient($request);

    $request = $client->post("/en/api/1.0/structure/change_state/{$nid}/{$state}");
    $data = $request->send();

    return $this->render('WellnetTestBundle:Default:response.html.twig', array('data' => $data));
  }

  /**
   * @param Request $request
   * @param $nid
   * @param $vid
   * @param $state
   *
   * @return Response
   */
  public function unpublishLiveAction(Request $request, $nid, $vid, $state) {
    $client = $this->getClient($request);

    $request = $client->post("/en/api/1.0/structure/unpublish_live/{$nid}/{$vid}/{$state}");
    $data = $request->send();

    return $this->render('WellnetTestBundle:Default:response.html.twig', array('data' => $data));
  }

}
