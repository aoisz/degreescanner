<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Degree Scanner</title>
        <meta name="description" content="Degree Scanner">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="<?php echo base_url("bootstrap/bootstrap.min.css")?>" rel="stylesheet">
        <script src="<?php echo base_url("bootstrap/bootstrap.bunlde.min.js")?>"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <style>
            html {
                height: -webkit-fill-available;
            }
        </style>
    </head>
    <body class="h-100">
        <div class="d-flex flex-norwrap p-0 h-100 w-100">
            <?php
                use App\Libraries\Session;

                $session = new Session();

                echo view("components/sidebar/index");
                $title = "";
                if($typeUploader === "full") {
                    $title = "Upload ảnh chứng chỉ";
                }
                else if($typeUploader === "information") {
                    $title = "Upload ảnh thông tin";
                }
                else if($typeUploader === "score") {
                    $title = "Upload ảnh điểm số";
                }
            ?>
            
            <div class="d-flex flex-column align-content-center justify-content-center h-100 w-100">
                <div class="d-flex justify-content-center">
                    <span class="fw-bold fs-1">
                        <?php 
                            echo $title;
                        ?>
                    </span>
                </div>
                <div class="body d-flex align-items-center justify-content-center flex-row w-100" style="height: 80%;">
                    <?php 
                        echo view_cell("ImageUploader::show", ["imagePath" => isset($imagePath) ? $imagePath : ""]);
                        $data = [
                            "data" => isset($data) ? $data : [], 
                            "imagePath" => isset($imagePath) ? $imagePath : ""
                        ];
                        if($typeUploader === "full") {
                            echo view_cell(
                                "CertificateInfor::showFullImagePicker", 
                                $data
                            );
                        }
                        else if($typeUploader === "information") {
                            echo view_cell(
                                "CertificateInfor::showInfor", 
                                $data
                            );
                        }
                        else if($typeUploader === "score"){
                            echo view_cell(
                                "CertificateInfor::showScore", 
                                $data
                            );
                        }
                    ?>
                </div>
            </div>
        </div>
        <script src="" async defer></script>
    </body>
</html>