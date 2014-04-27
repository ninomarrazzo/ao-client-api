<?php

namespace Wellnet\Bundle\TestBundle\Controller;

use Symfony\Component\HttpFoundation\Request;

class UserController extends ThreeLeggedController {

  /**
   * @param Request $request
   *
   * @return array
   */
  protected function getServiceData(Request $request) {
    $route = $request->get('_route');
    $server_url = $this->container->getParameter('server_url');

    $method = 'get';
    $uri = '';
    switch ($route) {
      case 'wellnet_test_list_users':
        $method = 'get';
        $uri = "{$server_url}/en/api_3_legs/1.0/user";
        break;
      case 'wellnet_test_get_user':
        $uid = $request->get('uid');

        $method = 'get';
        $uri = "{$server_url}/en/api_3_legs/1.0/user/{$uid}";
        break;
      case 'wellnet_test_get_user_accreditation':
        $id = $request->get('id');

        $method = 'post';
        $uri = "{$server_url}/en/api_3_legs/1.0/accreditation/get_user_accreditations/{$id}";
        break;
    }

    return array(
      'method' => $method,
      'uri' => $uri,
    );
  }
}
