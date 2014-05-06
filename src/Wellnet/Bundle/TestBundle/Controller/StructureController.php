<?php

namespace Wellnet\Bundle\TestBundle\Controller;

use Guzzle\Http\Client;
use Guzzle\Plugin\Oauth\OauthPlugin;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeFileSessionHandler;
use Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage;

class StructureController extends BaseClientController {

  /**
   * @param Request $request
   * @param $type
   *
   * @return Response
   */
  public function getStructureAction(Request $request, $type) {
    $client = $this->getOauthClient($request);

    $request = $client->post("{$this->getBaseUrl()}/structure/get_structure", NULL, array('type' => $type));
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
    $client = $this->getOauthClient($request);

    $request = $client->post("{$this->getBaseUrl()}/structure/change_state/{$nid}/{$state}");
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
    $client = $this->getOauthClient($request);

    $request = $client->post("{$this->getBaseUrl()}/structure/unpublish_live/{$nid}/{$vid}/{$state}");
    $data = $request->send();

    return $this->render('WellnetTestBundle:Default:response.html.twig', array('data' => $data));
  }

}
