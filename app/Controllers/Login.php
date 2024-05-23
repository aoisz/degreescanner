<?php

namespace App\Controllers;

use App\Libraries\APICall;
use App\Libraries\Session;

const ERROR = "error";
const NOTEXIST ="notexist";
class Login extends BaseController
{
    public function index(): string
    {
        $this->logout();
        return view('Pages/Login/index');
    }

    public function login()
    {
        $request = \Config\Services::request();
        $username = $request->getPost("user_name_lg");
        $password = $request->getPost("passlg");
        $api = new APICall();
        $session = new Session();
        $_SESSION["status"] = $api->post("/account/login",
            array(
                'username' => $username,
                'password' => $password
            )
        )->getBody();
        if ($_SESSION['status'] !== NOTEXIST) {
            if (ERROR === $_SESSION['status']) {
                return redirect()->route('login');
            }
            else {
                if(is_numeric($_SESSION["status"])) {
                    $_SESSION["student_id"] = $_SESSION["status"];
                    return redirect()->route('home');
                }
                else {
                    $_SESSION["admin"] = true;
                    return redirect()->route('home');
                }
            }
        } 
        else {
            return redirect()->route('login');
        }
    }

    public function logout(): string 
    {
        $session = new Session();
        return $session->logout();
    }
}
