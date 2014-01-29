<?php

namespace Wellnet\Bundle\TestBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class EliotNodeController extends NodeController {

  /**
   * @param Request $request
   *
   * @return Response
   */
  public function createAction(Request $request) {
    $client = $this->getClient($request);

    $request = $client->post('/en/api/1.0/node', NULL, array(
      'node' => array(
        'type' => 'uncategorized_operator',
        'title' => 'Eliot di test',
        // text field
        'body' => array('und' => array(0 => array('value' => 'Lorem ipsum', 'format' => 'full_html'))),
        // boolean
        'field_accettazione' => array('und' => array(0 => array('value' => 1))),
        // getlocations field
        'field_business_address' => array(
          'und' => array(
            0 => array(
              'latitude' => '40.32024210000001',
              'longitude' => '9.326437700000042',
              'address' => 'Nuoro, NU',
            )
          )
        ),
        // text field
        'field_eliot_code' => array('und' => array(0 => array('value' => 'Lorem ipsum'))),
        // taxonomy field
        'field_eliot_type' => array('und' => array(140)),
        // email field
        'field_email' => array('und' => array(0 => array('email' => 'info@example.com'))),
      )
    ));
    $data = $request->send();

    return $this->render('WellnetTestBundle:Default:response.html.twig', array('data' => $data));
  }

  /**
   * @param Request $request
   *
   * @return Response
   */
  public function getTypesAction(Request $request) {
    $client = $this->getClient($request);

    $request = $client->get("/en/api/1.0/taxonomy_term");
    $query = $request->getQuery();
    $query->set('parameters', array('vid' => 10));
    $data = $request->send();

    return $this->render('WellnetTestBundle:Default:response.html.twig', array('data' => $data));
  }

}
