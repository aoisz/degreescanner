<?php

namespace App\Controllers;
use App\Libraries\APICall;
use App\Libraries\Session;

// use Student;

class Home extends BaseController
{
    public function index()
    {
        $student = new Student();
        $api = new APICall();
        $session = new Session();
        if (isset($_SESSION["student_id"])) {
            $data = $student->getStudentByStudentId($_SESSION["student_id"]);
            return view('Pages/Home/index', ['student' => $data]);
        }
        else return view('Pages/Login/index');
    }
}
