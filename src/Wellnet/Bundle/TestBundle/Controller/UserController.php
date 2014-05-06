<?php

namespace Wellnet\Bundle\TestBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class UserController extends BaseClientController {

  /**
   * @param Request $request
   *
   * @return Response
   */
  public function indexAction(Request $request) {
    $client = $this->getOauthClient($request);

    $request = $client->get("{$this->getBaseUrl()}/user");
    $data = $request->send();

    return $this->render('WellnetTestBundle:Default:response.html.twig', array('data' => $data));
  }

  /**
   * @param Request $request
   * @param $uid
   *
   * @return Response
   */
  public function getAction(Request $request, $uid) {
    $client = $this->getOauthClient($request);

    $request = $client->get("{$this->getBaseUrl()}/user/{$uid}");
    $data = $request->send();

    return $this->render('WellnetTestBundle:Default:response.html.twig', array('data' => $data));
  }

  /**
   * @param Request $request
   * @param $id
   *
   * @return Response
   */
  public function getAccreditationAction(Request $request, $id) {
    $client = $this->getOauthClient($request);

    $request = $client->post("{$this->getBaseUrl()}/accreditation/get_user_accreditations/{$id}");
    $data = $request->send();

    return $this->render('WellnetTestBundle:Default:response.html.twig', array('data' => $data));
  }
}
