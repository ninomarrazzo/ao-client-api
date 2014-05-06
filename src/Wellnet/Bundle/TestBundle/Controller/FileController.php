<?php

namespace Wellnet\Bundle\TestBundle\Controller;

use Guzzle\Plugin\Cookie\CookieJar\ArrayCookieJar;
use Guzzle\Plugin\Cookie\CookiePlugin;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Guzzle\Http\Client;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class FileController extends BaseClientController {

  /**
   * @param Request $request
   *
   * @return Response
   */
  public function createAction(Request $request) {
    $client = $this->getOauthClient($request);

    // URL file for upload
    $file = '/Users/wellnetmini/Desktop/mare.jpg';

    $request = $client->post("{$this->getBaseUrl()}/file", NULL, array(
      'filename' => basename($file),
      'filemime' => "image/jpeg",
      'file' => base64_encode(file_get_contents($file)),
      'filesize' => filesize($file),
    ));
    $data = $request->send();

    return $this->render('WellnetTestBundle:Default:response.html.twig', array('data' => $data));
  }
}
