<?php

namespace App\Controllers;
use App\Libraries\APICall;

class Student extends BaseController
{
    public function index(): string
    {
        return view('Pages/Student/index');
    }

    public function getAll(): string
    {
        $api = new APICall();
        $response = $api->get('/student/getAll');
        $data = array(
            'response' => $response->getBody(),
        );
        return view('Pages/Student/index', $data);
    }
}
