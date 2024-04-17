<?php

namespace App\Controllers;

use thiagoalessio\TesseractOCR\TesseractOCR;

class ProcessImage extends BaseController {
    public function processData($rawData): array
    {
        $processedData = [];
        if(!empty($rawData)) {
            $rawArray = preg_split('/[\s,\t]+/',$rawData);
            $name = "";
            $tempName = "";
            $identification = "";
            $birthday = "";
            $testDate = "";
            $validUntil = "";
            for($i = 0; $i < count($rawArray); $i++) {
                if($rawArray[$i] != "Name") {
                    $tempName .= " ". $rawArray[$i];
                }
                else {
                    $name = trim($tempName,"*");
                    $identification = $rawArray[$i+1];
                    $birthday = $rawArray[$i+2];
                }
                if($rawArray[$i] == "Test" && $rawArray[$i+1] == "Date") {
                    $testDate = $rawArray[$i-2];
                    $validUntil = $rawArray[$i-1];
                }
                // echo $rawArray[$i] . "-";
            }
            $processedData = array(
                'name' => $name,
                'id' => $identification,
                'birthday' => $birthday,
                'testDate' => $testDate,
                'validUntil' => $validUntil,
            );
        }
        return $processedData;
    }

    public function process(): string
    {
        $file = $this->request->getFile("imageFile");
        $filepath = WRITEPATH.'uploads/data/image.png';
        $file->move(WRITEPATH.'uploads/data/',"image.png", true);
        $ocr = new TesseractOCR($filepath);
        $ocr->withoutTempFiles();
        $ocr->executable("C:\Program Files\Tesseract-OCR\\tesseract.exe");

        $raw = $ocr->run();
        $data = $this->processData($raw);
        copy($filepath, ROOTPATH.'public/uploads/image.png');
        $filepath = ROOTPATH.'public/uploads/image.png';
        return view("Pages/Scan/index",[
            'imagePath' => $filepath,
            'data' => $data
        ]);
    }
}