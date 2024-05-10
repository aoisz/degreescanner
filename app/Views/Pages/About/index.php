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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <style>
            html {
                height: -webkit-fill-available;;
            }
        </style>
    </head>
    <body class="h-100">
        <div class="d-flex flex-norwrap p-0 h-100 ">
            <?php
                echo view("components/sidebar/index");
            ?>
            <!-- container -->
            <div class="container row gy-3 gy-md-4 gy-lg-0 align-items-lg-center m-5">
                <div class="col-12 col-lg-6 m-2">
                    <img src="<?php echo base_url("img/SGU-LOGO.png")?>" class="img-fluid rounded" width="520" height="520" loading="lazy" >
                </div>
                <div class="col-12 col-lg-6 row justify-content-xl-center">
                    <h2 class="mb-3">Hệ thống nhận chuẩn đầu ra (CĐR) cho sinh viên trường Đại học Sài Gòn.</h2>
                    <p class="lead fs-4 mb-3 mb-xl-5">Hệ thống hỗ trợ sinh viên trường Đại học Sài Gòn có thể nhanh chóng, minh bạch và hiệu quả trong việc quản lý chuẩn đầu ra. Hệ thống tiếp nhận lưu trữ chứng chỉ và đưa ra thông tin trên chứng chỉ đó. Bạn có thể trích xuất thông tin từ các chứng chỉ:</p>
                    
                    <div class="d-flex align-items-center mb-3">
                        <div class="me-3 text-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                            </svg>
                        </div>
                        <div>
                            <p class="fs-5 m-0">TOEIC 2 kỹ năng</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <div class="me-3 text-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                            </svg>
                        </div>
                        <div>
                            <p class="fs-5 m-0">IELTS (đang hoàn thiện)</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4 mb-xl-5">
                        <div class="me-3 text-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                            </svg>
                        </div>
                        <div>
                            <p class="fs-5 m-0">Tin học cơ bản (đang hoàn thiện)</p>
                        </div>
                    </div>   
                </div>
            </div>
        </div>
        <script src="" async defer></script>
    </body>
</html>