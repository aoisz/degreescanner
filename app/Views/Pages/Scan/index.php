<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Degree Scanner</title>
        <meta name="description" content="Degree Scanner">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="<?php echo base_url("bootstrap/bootstrap.min.css")?>" rel="stylesheet">
        <script src="<?php echo base_url("bootstrap/bootstrap.bundle.min.js")?>" async defer></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <style>
            html {
                height: -webkit-fill-available;
            }
        </style>
    </head>
    <body class="h-100">
        <div class="d-flex flex-norwrap p-0 h-100 w-100 position-relative">
            <?php
                use App\Libraries\Session;

                $session = new Session();
                $data = isset($data) ? $data : [];
                if($session->getData("scan_error")) {
                    echo '
                        <div class="position-fixed top-0 w-100 d-flex justify-content-center">
                            <div class="alert alert-danger alert-dismissible fade show pe-3" role="alert">
                                <strong>Không nhận dạng được chứng chỉ! </strong> Vui lòng chọn ảnh có độ phân giải cao hơn.
                                <a href="#" class="close h4 text-decoration-none ms-2" data-dismiss="alert" aria-label="close" onclick="hide()">&times;</a>
                            </div>
                        </div>
                    ';
                }
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
                        echo view_cell("ImageUploader::show", ["imagePath" => isset($data["imageURL"]) > 0 ? $data["imageURL"] : "", "typeUploader" => $typeUploader]);
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
        <script>
            function hide() {
                const note = document.querySelector('.alert');
                console.log(note);
                note.classList.remove("show");
                note.remove();
            }
        </script>
    </body>
</html>