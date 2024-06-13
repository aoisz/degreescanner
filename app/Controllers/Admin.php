<?php

namespace App\Controllers;
use App\Libraries\APICall;
use App\Libraries\Session;

class Admin extends BaseController
{
    public function index()
    {
        $session = new Session();
        if(isset($_SESSION["admin"])) {
            $data = $this->getAllCertificate();
            return view("Pages/Admin/index", ["data" => $data]);
        }
        else return redirect()->route("login");
    }

    public function showPending(string $id) {
        $session = new Session();
        $api = new APICall();
        $response = $api->get('/student_certificate/getById/3');
        return view("Pages/Admin/pending", ['data' => json_decode($response->getBody(), true)]);
    }

    public function delete() {
        return view("pages/Admin/index", ["delete" => true]);
    }

    public function getAllCertificate(): string
    {
        $api = new APICall();
        $response = $api->get('/student_certificate/getAll');
        return $response->getBody();
        // return view('Pages/Admin/index', ['data' => json_decode($response->getBody())]);
    }

    public function authenticateCertificate()
    {
        $api = new APICall();
        $certId = $this->request->getPost("certId");
        $statusValue = $this->request->getPost("statusValue");
        $postData = [
            "certId" => $certId,
            "statusValue" => $statusValue
        ];
        $response = $api->postWithParams("/student_certificate/update_status", $postData);
        if($response->getBody() === "true") {
            return redirect()->route("admin");
        }
    }

    public function showStudents()
    {
        $session = new Session();
        $api = new APICall();
        $response = $api->get("/student/getAll");
        if(isset($_SESSION["admin"])) {
            return view("Pages/Admin/student_list", ["data" => $response->getBody()]);
        }
        else return redirect()->route("login");
    }
}
