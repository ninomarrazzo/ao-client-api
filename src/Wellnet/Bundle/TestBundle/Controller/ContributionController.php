<?php

namespace Wellnet\Bundle\TestBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ContributionController extends BaseClientController {

  /**
   * @param Request $request
   *
   * @return Response
   */
  public function getThemesAction(Request $request) {
    $client = $this->getClient($request);

    $request = $client->post('/en/api/1.0/contributions/get_themes');
    $data = $request->send();

    return $this->render('WellnetTestBundle:Default:response.html.twig', array('data' => $data));
  }

  /**
   * @param $request
   * @param $nid
   *
   * @return Response
   */
  public function grantPointsAction(Request $request, $nid) {
    $client = $this->getClient($request);

    $request = $client->post('/en/api/1.0/contributions/grant_points', NULL, array(
      'nid' => $nid,
    ));
    $data = $request->send();

    return $this->render('WellnetTestBundle:Default:response.html.twig', array('data' => $data));
  }

  /**
   * @param $request
   * @param $nid
   *
   * @return Response
   */
  public function removePointsAction(Request $request, $nid) {
    $client = $this->getClient($request);

    $request = $client->post('/en/api/1.0/contributions/remove_points', NULL, array(
      'nid' => $nid,
    ));
    $data = $request->send();

    return $this->render('WellnetTestBundle:Default:response.html.twig', array('data' => $data));
  }

  /**
   * @param Request $request
   *
   * @return Response
   */
  public function listMediasAction(Request $request) {
    $client = $this->getClient($request);

    $request = $client->post('/en/api/1.0/contributions/list_medias', NULL, array());
    $data = $request->send();

    return $this->render('WellnetTestBundle:Default:response.html.twig', array('data' => $data));
  }

  /**
   * @param $request
   * @param nid
   *
   * @return Response
   */
  public function getMediaAction(Request $request, $nid) {
    $client = $this->getClient($request);

    $request = $client->post('/en/api/1.0/contributions/get_media', NULL, array(
      'nid' => $nid,
    ));
    $data = $request->send();

    return $this->render('WellnetTestBundle:Default:response.html.twig', array('data' => $data));
  }

  /**
   * @param $request
   * @param fid
   *
   * @return Response
   */
  public function getMediaFileAction(Request $request, $fid) {
    $client = $this->getClient($request);

    $request = $client->get("/en/api/1.0/file/{$fid}");
    $data = $request->send();

    return $this->render('WellnetTestBundle:Default:response.html.twig', array('data' => $data));
  }

  /**
   * @param $request
   * @param $nid
   *
   * @return Response
   */
  public function getRelatedAction(Request $request, $nid) {
    $client = $this->getClient($request);

    $request = $client->post('/en/api/1.0/contributions/get_related', NULL, array(
      'nid' => $nid,
    ));
    $data = $request->send();

    return $this->render('WellnetTestBundle:Default:response.html.twig', array('data' => $data));
  }

  /**
   * @param $request
   * @param $nid
   *
   * @return Response
   */
  public function publishAction(Request $request, $nid) {
    $client = $this->getClient($request);

    $request = $client->post('/en/api/1.0/contributions/publish', NULL, array(
      'nid' => $nid,
    ));
    $data = $request->send();

    return $this->render('WellnetTestBundle:Default:response.html.twig', array('data' => $data));
  }
}
