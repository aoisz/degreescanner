<?php

namespace App\Controllers;

use App\Libraries\APICall;
use App\Libraries\Session;

class Certificate extends BaseController
{
  

    public function index(): string
    {
        $session = new Session();
        $studentId = session()->get("student_id");
        $api = new APICall();
        $response = $api->get('/student_certificate/getByCertificateId/'.$studentId);
        return view('Pages/Certificate/index', ['data' => $response->getBody()]);
    }
}
