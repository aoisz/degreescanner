<?php

namespace App\Controllers;

use App\Libraries\APICall;

class Certificate extends BaseController
{
    public function index($id): string
    {
        $api = new APICall();
        $response = $api->get('/student_certificate/getByCertificateId/'.$id);
        return view('Pages/Certificate/index', ['data' => $response->getBody()]);
    }
}
