<?php

namespace Wellnet\Bundle\TestBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CommentController extends ThreeLeggedController {

  /**
   * @param $request
   * @param $nid
   *
   * @return Response
   */
  public function indexAction(Request $request, $nid) {
    $client = $this->getClient($request);

    $request = $client->get('/en/api/1.0/comment');
    $query = $request->getQuery();
    $query->set('parameters', array('nid' => $nid));
    $data = $request->send();

    return $this->render('WellnetTestBundle:Default:response.html.twig', array('data' => $data));
  }

  /**
   * @param $request
   * @param $nid
   *
   * @return Response
   */
  public function createAction(Request $request, $nid) {
    $client = $this->getClient($request);

    $request = $client->post('/en/api/1.0/comment', NULL, array(
      'comment' => array(
        'subject' => 'Post di test5',
        'nid' => $nid,
        'comment_body' => array('und' => array(0 => array('value' => 'Lorem ipsum', 'format' => 'full_html'))),
      )
    ));
    $data = $request->send();

    return $this->render('WellnetTestBundle:Default:response.html.twig', array('data' => $data));
  }

  /**
   * @param $request
   * @param $cid
   *
   * @return Response
   */
  public function getAction(Request $request, $cid) {
    $client = $this->getClient($request);

    $request = $client->get("/en/api/1.0/comment/{$cid}");
    $data = $request->send();

    return $this->render('WellnetTestBundle:Default:response.html.twig', array('data' => $data));
  }
}
