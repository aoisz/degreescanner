<?php

namespace App\Controllers;

use App\Libraries\APICall;
use App\Libraries\Session;

class Scan extends BaseController
{
    public function index(array $params = [])
    {
        return view(
            'Pages/Scan/index', 
            [
                "typeUploader" => isset($params["typeUploader"]) ? $params["typeUploader"] : "full",
                "data" => isset($params["data"]) ? $params["data"] : [],
                "updateSuccess" => isset($params["updateSuccess"]) ? $params["updateSuccess"] : "",
                "scanError" => isset($params["scanError"]) ? $params["scanError"] : "",
            ]
        );
    }

    public function post()
    {
        $data = [];
        $api = new APICall();
        $session = new Session();
        $nextTypeUploader = "";
        $typeUploader = $this->request->getPost("typeUploader");
        if($typeUploader === "full") {
            $data = [
                "imageURL" => $this->request->getPost("imagePath")
            ];
            $nextTypeUploader = "information";
        }
        else if($typeUploader === "information") {
            $information = [
                'imageURL' => $this->request->getPost("inforImagePath"),
                'name' => $this->request->getPost("studentName"),
                'birthDay' => $this->request->getPost("birthDay"),
                'certTestDate' => $this->request->getPost("certTestDate"), 
                'certExpiredDate' => $this->request->getPost("certExpiredDate")
            ];
            $data = $information;
            $nextTypeUploader = "score";
        }
        else if($typeUploader === "score") {
            $score = [
                'imageURL' => $this->request->getPost("scoreImagePath"),
                'listeningScore' => $this->request->getPost("listeningScore"),
                'readingScore' => $this->request->getPost("readingScore"),
                'totalScore' => $this->request->getPost("totalScore")
            ];
            $data = $score;
        }
        if($session->hasData("data")) {
            $temp = $session->getData("data");
            if(isset($temp[$typeUploader])) {
                $temp[$typeUploader] = $data;
            }
            else {
                $temp += [$typeUploader => $data];                
            }
            $session->setData("data", $temp);
        }
        else {
            $session->setData("data", [$typeUploader => $data]);
        }
        if($typeUploader === "score") {
            $postData = $session->getData("data");
            $postData += ["studentId" => "3120410019"];
            $isCreated = $api->post("/student_certificate/create", $postData);
            return $this->index([
                "typeUploader" => "full",
                "updateSuccess" => true
            ]);
        }
        else {
            return $this->index([
                "typeUploader" => $nextTypeUploader,
            ]);
        }
    }
}
