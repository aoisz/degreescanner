<?php

namespace App\Controllers;
use App\Libraries\APICall;
use App\Libraries\Session;

class Home extends BaseController
{
    public function index()
    {
        $student = new Student();
        $session = new Session();
        if (isset($_SESSION["student_id"])) {
            $data = $student->getStudentByStudentId($_SESSION["student_id"]);
            $session->setData("student", $data);
            return view('Pages/Scan/index', ["typeUploader" => "full"]);
        }
        else if(isset($_SESSION["admin"])) {
            return redirect()->route("admin");
        }
        else return view('Pages/Login/index');
    }
}
