<?php

namespace Wellnet\Bundle\TestBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class EventNodeController extends BaseClientController {

  /**
   * @param Request $request
   *
   * @return Response
   */
  public function createAction(Request $request) {
    $client = $this->getOauthClient($request);

    $request = $client->post("{$this->getBaseUrl()}/node", NULL, array(
      'node' => array(
        'type' => 'event',
        'title' => 'Altro evento di test',
        //'language' => 'it',
        // entityreference field
        'og_group_ref' => array('und' => array(0 => array('default' => array(23619)))),
        // text field
        'body' => array('und' => array(0 => array('value' => 'Lorem ipsum', 'format' => 'full_html'))),
        // date field
        'field_event_date' => array(
          'und' => array(
            0 => array(
              'show_todate' => TRUE,
              'value' => array(
                'date' => '2014-01-13',
                'time' => '12:30',
              ),
              'value2' => array(
                'date' => '2014-01-13',
                'time' => '14:30',
              ),
              'rrule' => array(),
            )
          )
        ),
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
        'field_allegati' => array('und' => array(0 => array('fid' => 0))),
      )
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
  public function updateAction(Request $request, $nid) {
    $client = $this->getOauthPutClient($request);

    $request = $client->put("{$this->getBaseUrl()}/node/{$nid}", NULL, array(
      'title' => 'Cambio titolo Event',
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
  public function deleteAction(Request $request, $nid) {
    $client = $this->getOauthClient($request);

    $request = $client->delete("{$this->getBaseUrl()}/node/{$nid}");
    $data = $request->send();

    return $this->render('WellnetTestBundle:Default:response.html.twig', array('data' => $data));
  }

}
