<?php

namespace App\Controllers;
use App\Libraries\APICall;
use App\Libraries\Session;

class Student extends BaseController
{
    public function index()
    {
        $session = new Session();
        if(isset($_SESSION["student"])) {
            return view('Pages/Profile/index');
        }
        else return redirect()->route("login");
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
    
    public function changePassword()
    {
        $session = new Session();
        $api = new APICall();
        if(isset($_SESSION["student"])) {
            $oldPwd = $this->request->getPost("old_password");
            $newPwd = $this->request->getPost("new_password");
            $studentId = $_SESSION["student"]->studentId;
            $postData = [
                "studentId" => $studentId,
                "newPwd" => $newPwd,
                "oldPwd" => $oldPwd
            ];
            $response = $api->postWithParams("/account/change_password", $postData);
            $session->setFlashValue("pwdChangeStatus", $response->getBody());
            return redirect()->route("profile");
        }
        else return redirect()->route("login");
    }
}
