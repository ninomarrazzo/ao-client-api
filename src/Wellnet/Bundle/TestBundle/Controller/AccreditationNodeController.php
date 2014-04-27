<?php

namespace Wellnet\Bundle\TestBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Guzzle\Http\Client;
use Guzzle\Plugin\Oauth\OauthPlugin;
use Symfony\Component\HttpFoundation\Session\Session;

class AccreditationNodeController extends ThreeLeggedController {

  /**
   * @param $session
   * @param $request
   *
   * @return mixed
   */
  protected function fetch(Session $session, Request $request) {
    $client = new Client($this->container->getParameter('server_url'));
    $oauth = new OauthPlugin(array(
      'consumer_key' => $this->consumer_key,
      'consumer_secret' => $this->consumer_secret,
      'token' => $session->get('access_token'),
      'token_secret' => $session->get('access_token_secret'),
    ));
    $client->addSubscriber($oauth);

    $request = $client->post('/en/api_3_legs/1.0/node', NULL, array(
      'node' => array(
        'type' => 'accreditamento',
        // entityreference field
        'field_operatore' => array('und' => array(0 => array('target_id' => '17166'))),
        'user' => 'validato1',
        // taxonomy field
        'field_ruolo' => array('und' => array(215)),
        // file
        'field_allegati' => array('und' => array(0 => array('fid' => 0))),
        // boolean
        'field_accettazione' => array('und' => array(0 => array('value' => 0))),
      )
    ));
    $query = $request->getQuery();
    $query->set('field_operatore', '17166');
    $response = $request->send();

    return $response;
  }

}
