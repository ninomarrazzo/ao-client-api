<?php

namespace Wellnet\Bundle\TestBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AccreditationNodeController extends NodeController {

  /**
   * @param Request $request
   *
   * @return Response
   */
  public function createAction(Request $request) {
    $client = $this->getClient($request);

    $request = $client->post('/en/api/1.0/node', NULL, array(
      'node' => array(
        'type' => 'accreditamento',
        // entityreference field
        'field_operatore' => array('und' => array(0 => array('target_id' => '20970'))),
        'user' => 'api_consumer',
        // taxonomy field
        'field_ruolo' => array('und' => array(1)),
        // file
        'field_allegati' => array('und' => array(0 => array('fid' => 0))),
        // boolean
        'field_accettazione' => array('und' => array(0 => array('value' => 0))),
      )
    ));
    $query = $request->getQuery();
    $query->set('field_operatore', '20970');
    $data = $request->send();

    return $this->render('WellnetTestBundle:Default:response.html.twig', array('data' => $data));
  }

}
