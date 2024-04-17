<?php

namespace App\Controllers;

use App\Libraries\APICall;
use App\Libraries\Session;

const ERROR = "error";

class Login extends BaseController
{
    public function index(): string
    {
        $this->logout();
        return view('Pages/Login/index');
    }

    public function login(): string
    {
        $request = \Config\Services::request();
        $username = $request->getPost("user_name_lg");
        $password = $request->getPost("passlg");
        $api = new APICall();
        $session = new Session();
        $response = $api->post("/account/login",
            array(
                'username' => $username,
                'password' => $password
            )
        );
        if ($response->getBody() != null) {
            if (ERROR == $response->getBody()) {
                return view('Pages/Login/index');
            }
            else {
                $result = $session->setUserSession($response->getBody());
                return view('Pages/Home/index',array('response' => $response->getBody()));
            }
        } 
        else {
            return view('Pages/Login/index',array('response' => null));
        }
    }

    public function logout(): string 
    {
        $session = new Session();
        return $session->logout();
    }
}
