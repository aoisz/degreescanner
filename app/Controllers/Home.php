<?php

namespace App\Controllers;
use App\Libraries\APICall;
use App\Libraries\Session;
use CodeIgniter\CLI\Console;

// use Student;

class Home extends BaseController
{
    public function index(): string
    {
        $student = new Student();
        $api = new APICall();
        $session = new Session();
        if (isset($_SESSION["student_id"])) {
            $data = $student->getStudentByStudentId($_SESSION["student_id"]);
            $session->setData("student", $data);
            return view('Pages/Home/index');
        }
        else return view('Pages/Login/index');
    }
}
