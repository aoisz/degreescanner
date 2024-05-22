<?php

namespace App\Controllers;

use App\Libraries\APICall;
use CodeIgniter\Images\Handlers\ImageMagickHandler;
use thiagoalessio\TesseractOCR\TesseractOCR;
use thiagoalessio\TesseractOCR\UnsuccessfulCommandException;

class ProcessImage extends BaseController {

    public function processOCR($filePath): string 
    {
        try {
            $rawData = "";
            $ocr = new TesseractOCR($filePath);
            $ocr->withoutTempFiles();
            $ocr->executable("C:\Program Files\Tesseract-OCR\\tesseract.exe");
            $rawData = $ocr->run();
            return $rawData;
        }
        catch(UnsuccessfulCommandException $error) {
            return "";
        }
    }

    public function processScoreData($rawData): array 
    {
        $processData = [];

        return $processData;
    }

    // public function processInformation($rawData): array
    // {
    //     $processedData = array(
    //         'name' => "",
    //         'id' => "",
    //         'birthday' => "",
    //         'testDate' => "",
    //         'validUntil' => "",
    //     );
    //     if(!empty($rawData)) {
    //         $rawArray = preg_split('/[\s,\t]+/',$rawData);
    //         $tempName = "";
    //         for($i = 0; $i < count($rawArray); $i++) {
    //             if($rawArray[$i] != "Name") {
    //                 $tempName .= " ". $rawArray[$i];
    //             }
    //             else {
    //                 $tempName = $this->cleanString($tempName);
    //                 $processedData['name'] = trim($tempName,"*");
    //                 $processedData['id'] = $rawArray[$i+1];
    //                 $processedData['birthday'] = $this->formatDate($rawArray[$i+2]);
    //             }
    //             if($rawArray[$i] === "Test" && $rawArray[$i+1] === "Date") {
    //                 if($rawArray[$i+2] === "(yyyy/mm/dd)") {
    //                     $processedData['testDate'] = $this->formatDate($rawArray[$i-1]);
    //                     $processedData['validUntil'] = $this->formatDate($rawArray[$i+3]);
    //                 }
    //                 else {
    //                     $processedData['testDate'] = $this->formatDate($rawArray[$i-2]);
    //                     $processedData['validUntil'] = $this->formatDate($rawArray[$i-1]);
    //                 }
    //             }
    //             if(!str_contains($rawData, "Test")) {
    //                 if($rawArray[$i] === "Valid" && $rawArray[$i+1] === "Until") {
    //                     $processedData['testDate'] = $this->formatDate($rawArray[$i-2]);
    //                     $processedData['validUntil'] = $this->formatDate($rawArray[$i-1]);
    //                 }
    //             }
    //         }
    //     }
    //     return $processedData;
    // }

    // public function cleanString($string): string 
    // {
    //     return preg_replace(
    //             array('#[\\s-]+#', '#[^A-Za-z0-9. -]+#'),
    //             array(' ', ''),
    //             urldecode($string)
    //         );
    // }

    // public function formatDate($string): string
    // {
    //     $date = explode("/",$string);
    //     $date = array_reverse($date);
    //     return implode("/", $date);
    // }

    // public function formatImage() 
    // {
    //     $image = \Config\Services::image();
    //     $image->withFile(base_url("uploads/score.png"));        
    // }

    public function process()
    {
        $api = new APICall();
        $typeUploader = $this->request->getPost("typeUploader");
        $imageName = $typeUploader.".png";
        $data = [];

        $file = $this->request->getFile("imageFile");
        $filePath = WRITEPATH.'uploads/data/'.$imageName;
        $file->move(WRITEPATH.'uploads/data/',$imageName, true);
        $isCopied = copy($filePath, ROOTPATH.'public/uploads/'.$imageName);
        if($isCopied) {
            $filePath = ROOTPATH.'public/uploads/'.$imageName;
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
        return view("Pages/Scan/index",[
            'typeUploader' => $typeUploader,
            'imagePath' => $filePath,
            'data' => $data
        ]);
    }
}