<?php

namespace App\Controllers;

use App\Libraries\APICall;
use App\Libraries\Session;

class ProcessImage extends BaseController {

    public function process()
    {
        $api = new APICall();
        $session = new Session();
        $typeUploader = $this->request->getPost("typeUploader");
        $imageName = $typeUploader.".png";
        $data = [];

        $file = $this->request->getFile("imageFile");
        $filePath = WRITEPATH.'uploads/data/'.$imageName;
        $file->move(WRITEPATH.'uploads/data/',$imageName, true);
        $isCopied = copy($filePath, ROOTPATH.'public/uploads/'.$imageName);
        if($isCopied) {
            $filePath = ROOTPATH.'public/uploads/'.$imageName;
            echo $session->getData("student_id");
        }

        if($typeUploader === "information") {
            $data = array(
                'file_path' => $filePath,
                'studentId' => "3120410019"
            );
            $result = $api->postWithFile("/ocr/upload/information", $data);
            $data = json_decode($result->getBody(), true);
        }
        else if($typeUploader === "score") {
            $data = array(
                'file_path' => $filePath,
                'studentId' => "3120410019"
            );
            $result = $api->postWithFile("/ocr/upload/score", $data);
            $data = json_decode($result->getBody(), true);
        }
        else if($typeUploader === "full") {
            
        }
        // return view("Pages/Scan/index",[
        //     'typeUploader' => $typeUploader,
        //     'imagePath' => $filePath,
        //     'data' => $data
        // ]);
    }
}