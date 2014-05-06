<?php

namespace Wellnet\Bundle\TestBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class GroupController extends BaseClientController {

  /**
   * @param Request $request
   * @param $gid
   *
   * @return Response
   */
  public function getMembersAction(Request $request, $gid) {
    $client = $this->getOauthClient($request);

    $request = $client->post("{$this->getBaseUrl()}/groups/get_members", NULL, array(
      'gid' => $gid,
    ));
    $data = $request->send();

    return $this->render('WellnetTestBundle:Default:response.html.twig', array('data' => $data));
  }

  /**
   * @param Request $request
   * @param $gid
   *
   * @return Response
   */
  public function getServicesAction(Request $request, $gid) {
    $client = $this->getOauthClient($request);

    $request = $client->post("{$this->getBaseUrl()}/groups/get_services", NULL, array(
      'gid' => $gid,
    ));
    $data = $request->send();

    return $this->render('WellnetTestBundle:Default:response.html.twig', array('data' => $data));
  }

}
