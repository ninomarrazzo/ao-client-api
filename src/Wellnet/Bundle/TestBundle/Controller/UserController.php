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
    $client = $this->getClient($request);

    $request = $client->get('/en/api/1.0/user');
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
    $client = $this->getClient($request);

    $request = $client->get("/en/api/1.0/user/{$uid}");
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
    $client = $this->getClient($request);

    $request = $client->post("/en/api/1.0/accreditation/get_user_accreditations/{$id}");
    $data = $request->send();

    return $this->render('WellnetTestBundle:Default:response.html.twig', array('data' => $data));
  }
}
