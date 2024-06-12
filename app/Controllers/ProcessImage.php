<?php

namespace App\Controllers;

use App\Libraries\APICall;
use App\Libraries\Session;

class ProcessImage extends BaseController {

    public function process()
    {
        $api = new APICall();
        $session = new Session();
        $studentId = $session->getData("student_id");
        $typeUploader = $this->request->getPost("typeUploader");
        $imageName = $typeUploader.".png"; 
        $data = [];
        // Copy to public folder, CI4 can only access image from public folder
        $file = $this->request->getFile("imageFile");
        $filePath = ROOTPATH.'public\uploads\\' . $studentId . '\\';
        $file->move($filePath,$imageName,true);
        $filePath .= $imageName;
        if($typeUploader === "full") {
            $session->removeData("data");
            $postData = array(
                'file_path' => $filePath,
                'studentId' => $studentId
            );
            $result = $api->postWithFile("/ocr/upload/full", $postData);
            $data = json_decode($result->getBody());
        }
        else if($typeUploader === "information") {
            $postData = array(
                'file_path' => $filePath,
                'studentId' => $studentId
            );
            $result = $api->postWithFile("/ocr/upload/information", $postData);
            $data = json_decode($result->getBody(), true);
        }
        else if($typeUploader === "score") {
            $postData = array(
                'file_path' => $filePath,
                'studentId' => $studentId
            );
            $result = $api->postWithFile("/ocr/upload/score", $postData);
            $data = json_decode($result->getBody(), true);
        }
        $scanError = false;
        if($typeUploader !== "full") {    
            foreach ($data as $item) {
                if($item === "") {
                    // $session->setData("scan_error", true);
                    $scanError = true;
                    break;
                }
            }
        }
        $data = json_decode(json_encode($data), true); // stdClass -> array
        $session->setFlashValue("scanError", $scanError);
        return view(
            "Pages/Scan/index", 
            [
                "typeUploader" => $typeUploader, 
                "data" => $data,
                "imagePath" => $filePath,
            ]
        );
    }
}

