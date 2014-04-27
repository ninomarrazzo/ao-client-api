<?php

namespace Wellnet\Bundle\TestBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ImageNodeController extends ThreeLeggedController {

  /**
   * @param Request $request
   *
   * @return Response
   */
  public function createAction(Request $request) {
    $client = $this->getClient($request);

    $request = $client->post('/en/api/1.0/node', NULL, array(
      'node' => array(
        'type' => 'image',
        'title' => 'Image di test',
        //'language' => 'it',
        // entityreference field
        'og_group_ref' => array('und' => array(0 => array('default' => array(23619)))),
        // text field
        'body' => array('und' => array(0 => array('value' => 'Lorem ipsum', 'format' => 'full_html'))),
        // taxonomy field
        'field_thematic' => array('und' => array(218)),
        // getlocations field
        'field_location' => array(
          'und' => array(
            0 => array(
              'latitude' => '40.32024210000001',
              'longitude' => '9.326437700000042',
              'address' => 'Nuoro, NU',
            )
          )
        ),
        // taxonomy field
        'field_license' => array('und' => 253),
        'field_image_image' => array('und' => array(0 => array('fid' => 268))),
      )
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
      'title' => 'Cambio titolo Image',
    ));
    $data = $request->send();

    return $this->render('WellnetTestBundle:Default:response.html.twig', array('data' => $data));
  }


}
