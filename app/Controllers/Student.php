<?php

namespace App\Controllers;
use App\Libraries\APICall;

class Student extends BaseController
{
    public function index(): string
    {
        return view('Pages/Profile/index');
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

    public function getStudentByStudentId(string $studentId)
    {
        $api = new APICall();
        $studentId = session()->get("student_id");
        $response = $api->get('/student/getByStudentId/'.$studentId);
        $data = json_decode($response->getBody());
        return $data;
    }
}
