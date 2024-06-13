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

    public function showStudentAccounts()
    {
        $session = new Session();
        $api = new APICall();
        $response = $api->get("/account/getAll");
        if(isset($_SESSION["admin"])) {
            return view("Pages/Admin/student_list", ["data" => $response->getBody()]);
        }
        else return redirect()->route("login");
    }

    public function search()
    {
        $api = new APICall();
        $session = new Session();
        if(isset($_SESSION["admin"])) {
            $search_data = $this->request->getPost("search_data");
            $search_status = $this->request->getPost("submit");
            if($search_status === "search") {
                $response = $api->postWithParams("/account/search", ["studentId" => $search_data]);
                $session->setFlashValue("is_searching", $response->getBody());
            }
            return redirect()->route("accounts");
        }
        else return redirect()->route("login");
    }

    public function reset()
    {
        $api = new APICall();
        $session = new Session();
        if(isset($_SESSION["admin"])) {
            $studentId = $this->request->getPost("studentId");
            echo $studentId;
            $response = $api->postWithParams("/account/reset", ["studentId" => $studentId]);
            $session->setFlashValue("success", $response->getBody() === "true");
            return redirect()->route("accounts");
        }
        else return redirect()->route("login");
    }
}
