<?php

namespace Wellnet\Bundle\TestBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Guzzle\Http\Client;
use Guzzle\Plugin\Oauth\OauthPlugin;
use Symfony\Component\HttpFoundation\Session\Session;

class WorkshopController extends ThreeLeggedController {

  /**
   * @param $session
   * @param $request
   *
   * @return mixed
   */
  protected function fetch(Session $session, Request $request) {
    $route = $request->get('_route');

    $client = new Client($this->container->getParameter('server_url'));
    $oauth = new OauthPlugin(array(
      'consumer_key' => $this->consumer_key,
      'consumer_secret' => $this->consumer_secret,
      'token' => $session->get('access_token'),
      'token_secret' => $session->get('access_token_secret'),
    ));
    $client->addSubscriber($oauth);

    $response = NULL;
    switch ($route) {
      case 'wellnet_test_get_workshop_attendees':
        $response = $this->getAttendeesAction($request, $client);
        break;
      case 'wellnet_test_create_attendee_node':
        $response = $this->createAttendeeAction($request, $client);
        break;
    }

    return $response;
  }

  /**
   * @param Request $request
   * @param $client
   *
   * @return Response
   */
  public function getAttendeesAction(Request $request, Client $client) {
    $nid = $request->get('nid');

    $request = $client->post('/en/api_3_legs/1.0/workshop/get_attendees', NULL, array(
      'nid' => $nid,
    ));
    $response = $request->send();

    return $response;
  }

  /**
   * @param Request $request
   * @param $client
   *
   * @return Response
   */
  public function createAttendeeAction(Request $request, Client $client) {
    $request = $client->post('/en/api_3_legs/1.0/node', NULL, array(
      'node' => array(
        'type' => 'attendee',
        // text field
        'field_description' => array('und' => array(0 => array('value' => 'Lorem ipsum'))),
        'field_other_interests' => array('und' => array(0 => array('value' => 'Lorem ipsum'))),
        // entityreference
        'field_workshop' => array('und' => '22451'),
        'field_type_of_attendee' => array('und' => '179'),
        'field_attendee_user' => array('und' => array(0 => array('target_id' => 'user (1075)'))),
        // taxonomy field
        'field_activity' => array('und' => array(177)),
        'field_transportation' => array('und' => array(195)),
        'field_interested_in' => array('und' => array(193)),
        'field_products' => array('und' => array(145)),
        'field_market' => array('und' => array(173)),
        'field_target_group' => array('und' => array(165)),
        'field_seasonality' => array('und' => array(159)),
        //ingeter field
        'field_perc_couple' => array('und' => array(0 => array('value' => 10))),
        'field_perc_family' => array('und' => array(0 => array('value' => 10))),
        'field_perc_single' => array('und' => array(0 => array('value' => 10))),
        'field_perc_other_target_groups' => array('und' => array(0 => array('value' => 10))),
        'field_perc_packages' => array('und' => array(0 => array('value' => 10))),
        'field_perc_only_services' => array('und' => array(0 => array('value' => 10))),
        'field_perc_summer' => array('und' => array(0 => array('value' => 10))),
        'field_prec_spring' => array('und' => array(0 => array('value' => 10))),
        'field_perc_autumn' => array('und' => array(0 => array('value' => 10))),
        'field_perc_winter' => array('und' => array(0 => array('value' => 10))),
      )
    ));
    $response = $request->send();

    return $response;
  }

}
