<?php

namespace App\Controllers;
use App\Libraries\APICall;

class History extends BaseController
{
    public function index(): string
    {
        $api = new APICall();
        $response = $api->get('/student_certificate/getAll');
        $data = array(
            'response' => $response->getBody(),
        );
        return view('Pages/History/index', $data);
    }
}
