<?php

namespace Wellnet\Bundle\TestBundle\Controller;

use Guzzle\Http\QueryString;
use Symfony\Component\HttpFoundation\Request;

class CommentController extends ThreeLeggedController {

  /**
   * {@inheritdoc}
   */
  protected function getServiceData(Request $request) {
    $route = $request->get('_route');

    $method = 'get';
    $uri = '';
    switch ($route) {
      case 'wellnet_test_list_comments':
        $method = 'get';
        $uri = "comment";
        break;
      case 'wellnet_test_create_comments':
        $method = 'post';
        $uri = "comment";
        break;
      case 'wellnet_test_get_comments':
        $cid = $request->get('cid');

        $method = 'get';
        $uri = "comment/{$cid}";
        break;
    }

    return array(
      'method' => $method,
      'uri' => $uri,
    );
  }

  /**
   * {@inheritdoc}
   */
  protected function getQuery($request, QueryString $query) {
    $route = $request->get('_route');

    switch ($route) {
      case 'wellnet_test_list_comments':
        $nid = $request->get('nid');

        $query->set('parameters', array('nid' => $nid));
        break;
    }
  }

  /**
   * {@inheritdoc}
   */
  protected function getPayload($request) {
    $route = $request->get('_route');

    $payload = NULL;
    switch ($route) {
      case 'wellnet_test_create_comments':
        $nid = $request->get('nid');

        $payload = array(
          'comment' => array(
            'subject' => 'Post di test5',
            'nid' => $nid,
            'comment_body' => array('und' => array(0 => array('value' => 'Lorem ipsum', 'format' => 'full_html'))),
          ),
        );
        break;
    }

    return $payload;
  }
}
