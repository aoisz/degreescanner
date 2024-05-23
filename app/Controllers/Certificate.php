<?php

namespace App\Controllers;

use App\Libraries\APICall;
use App\Libraries\Session;

class Certificate extends BaseController
{
    public function index()
    {
        $session = new Session();
        $api = new APICall();
        $uri = $_SERVER["REQUEST_URI"];
        $uri = trim($uri, "/");
        $uri = explode("/", $uri);
        $certId = $uri[1];
        $response = $api->get('/student_certificate/getById/'.$certId);
        return view('Pages/Certificate/index', ['data' => json_decode($response->getBody())]);
    }
}
