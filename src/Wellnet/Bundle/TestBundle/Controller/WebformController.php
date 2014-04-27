<?php

namespace Wellnet\Bundle\TestBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Guzzle\Http\Client;
use Guzzle\Plugin\Oauth\OauthPlugin;
use Symfony\Component\HttpFoundation\Session\Session;

class WebformController extends ThreeLeggedController {

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
      case 'wellnet_test_list_webform':
        $response = $this->indexWebformAction($request, $client);
        break;
      case 'wellnet_test_get_webform':
        $response = $this->getWebformAction($request, $client);
        break;
      case 'wellnet_test_webform_submission':
        $response = $this->getSubmissionAction($request, $client);
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
  public function indexWebformAction(Request $request, Client $client) {
    $request = $client->get('/en/api_3_legs/1.0/webform');
    $response = $request->send();

    return $response;
  }

  /**
   * @param Request $request
   * @param $client
   *
   * @return Response
   */
  public function getWebformAction(Request $request, Client $client) {
    $nid = $request->get('nid');

    $request = $client->get("/en/api_3_legs/1.0/webform/{$nid}");
    $response = $request->send();

    return $response;
  }

  /**
   * @param Request $request
   * @param $client
   *
   * @return Response
   */
  public function getSubmissionAction(Request $request, Client $client) {
    $nid = $request->get('nid');

    $request = $client->get("/en/api_3_legs/1.0/webform/{$nid}/submissions");
    $response = $request->send();

    return $response;
  }
}
