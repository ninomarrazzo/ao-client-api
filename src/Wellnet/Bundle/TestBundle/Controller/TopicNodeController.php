<?php

namespace Wellnet\Bundle\TestBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class TopicNodeController extends NodeController {

  /**
   * @param Request $request
   * @param $type
   *
   * @return Response
   */
  public function indexAction(Request $request, $type = 'topic') {
    $client = $this->getClient($request);

    $request = $client->get('/en/api/1.0/node');
    $query = $request->getQuery();
    $query->set('parameters', array('type' => $type, 'og_group_ref' => 23669));
    $data = $request->send();

    return $this->render('WellnetTestBundle:Default:response.html.twig', array('data' => $data));
  }

  /**
   * @param Request $request
   *
   * @return Response
   */
  public function createAction(Request $request) {
    $client = $this->getClient($request);

    $request = $client->post('/en/api/1.0/node', NULL, array(
      'node' => array(
        'type' => 'topic',
        'title' => 'Topic di test',
        //'language' => 'it',
        // entityreference field
        'og_group_ref' => array('und' => array(0 => array('default' => array(23619)))),
        // text field
        'body' => array('und' => array(0 => array('value' => 'Lorem ipsum', 'format' => 'full_html'))),
        // taxonomy field
        'field_topic_tags' => array('und' => 'Test tag'),
        'field_allegati' => array('und' => array(0 => array('fid' => 0))),
      )
    ));
    $data = $request->send();

    return $this->render('WellnetTestBundle:Default:response.html.twig', array('data' => $data));
  }

  /**
   * @param Request $request
   * @param $name
   *
   * @return Response
   */
  public function createTagAction(Request $request, $name) {
    $client = $this->getClient($request);

    $request = $client->post('/en/api/1.0/contributions/create_tag', NULL, array(
      'name' => $name,
    ));
    $data = $request->send();

    return $this->render('WellnetTestBundle:Default:response.html.twig', array('data' => $data));
  }

  /**
   * @param Request $request
   * @param $nid
   *
   * @return Response
   */
  public function updateAction(Request $request, $nid) {
    $client = $this->getPutClient($request);

    $request = $client->put("/en/api/1.0/node/{$nid}", NULL, array(
      'title' => 'Cambio titolo Topic',
    ));
    $data = $request->send();

    return $this->render('WellnetTestBundle:Default:response.html.twig', array('data' => $data));
  }


}
