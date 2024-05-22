<?php

namespace App\Controllers;
use App\Libraries\APICall;
use CodeIgniter\CLI\Console;

// use Student;

class Home extends BaseController
{
    public function index(): string
    {
        $student = new Student();
        $api = new APICall();
        if (isset($_SESSION["student_id"])) {
            $data = $student->getStudentByStudentId($_SESSION["student_id"]);
            return view('Pages/Home/index', ['student' => $data]);
        }
        else return view('Page/Login/index');
    }
}
