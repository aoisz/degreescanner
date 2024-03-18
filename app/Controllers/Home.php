<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        // require_once(realpath(dirname(__FILE__)."/..")."/Views/template/header/index.php");
        return view('Pages/Home/index');
    }
}
