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
            return view("Pages/Admin/index");
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
}
