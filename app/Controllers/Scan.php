<?php

namespace App\Controllers;

use App\Libraries\Session;

class Scan extends BaseController
{
    public function index($typeUploader)
    {
        return view('pages/Scan/index', ['typeUploader' => $typeUploader]);
    }

    public function post()
    {
        $session = new Session();
        $data = $session->getData("data") ? json_decode($session->getData("data")) : ["fullImagePath" => "", 'information' => [], 'score' => []];
        $nextTypeUploader = "";
        $typeUploader = $this->request->getPost("typeUploader");
        if($typeUploader === "full") {
            $data["fullImagePath"] = $this->request->getPost("imagePath");
            $nextTypeUploader = "information";
        }
        else if($typeUploader === "information") {
            $information = array(
                'inforImagePath' => $this->request->getPost("inforImagePath"),
                'name' => $this->request->getPost("studentName"),
                'birthDay' => $this->request->getPost("birthDay"),
                'certTestDate' => $this->request->getPost("certTestDate"), 
                'certExpiredDate' => $this->request->getPost("certExpiredDate")
            );
            $data->information = $information;
            $nextTypeUploader = "score";
        }
        else if($typeUploader === "score") {
            
        }
        $session->setData("data", json_encode($data));
        return view('Pages/Scan/index', ['typeUploader' => $nextTypeUploader]);
    }
}
