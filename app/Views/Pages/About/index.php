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
    <body class="h-100 w-100">
        <div class="d-flex flex-norwrap p-0 h-100 w-100">
            <?php
                echo view("components/sidebar/index");
            ?>
            <!-- container -->
            <div class="container d-flex flex-column p-0 h-100 w-100">
                <div class="w-100 d-flex  p-5 ">
                    <div class="col-12 col-lg-6 m-2">
                        <img src="<?php echo base_url("img/SGU-LOGO.png")?>" class="img-fluid rounded" width="520" height="520" loading="lazy" >
                    </div>
                    <div class="w-100 d-flex flex-column  flex-wrap ">
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
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                </svg>
                            </div>
                            <div>
                                <p class="fs-5 m-0">IELTS (đang hoàn thiện)</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-4 mb-xl-5">
                            <div class="me-3 text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                </svg>
                            </div>
                            <div>
                                <p class="fs-5 m-0">Tin học cơ bản (đang hoàn thiện)</p>
                            </div>
                        </div>   
                    </div>
                </div>
                <!-- author -->
                <div class="w-100 d-flex align-items-center">
                    <div class="w-50 m-3 card border-light-subtle" style="height: 220px">
                        <div class="w-100 row">
                            <div class="m-2 ms-3 col-3 d-flex justify-content-center align-items-center">
                                <img class="img-fluid author-avatar bsb-scale bsb-hover-scale-up" loading="lazy" src="<?php echo base_url("img/menavt.png")?>" width="120" height="120">
                            </div>
                            <div class="col-7">
                                <div class="card-body">
                                    <h6 class="card-subtitle mb-2 text-body-secondary">Sinh viên thực hiện</h6>
                                    <h4 class="mb-2">Mai Thanh An</h4>
                                    <p class="mb-1">Khoa: Công nghệ thông tin</p>
                                    <p class="mb-1">Chuyên ngành: Kỹ thuật phần mềm</p>
                                    <p class="mb-1">Lớp: DCT1203</p>
                                    <p class="mb-1">MSSV: 3120410019</p>
                                    <ul class="bsb-social-media nav m-0">
                                        <li class="nav-item">
                                            <a class="nav-link link-dark" href="#!">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 512 512">
                                                    <path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-50 card border-light-subtle" style="height: 220px">
                        <div class="w-100 row">
                            <div class="m-2 ms-3 col-3 d-flex justify-content-center align-items-center">
                                <img class="img-fluid author-avatar bsb-scale bsb-hover-scale-up" loading="lazy" src="<?php echo base_url("img/girlavt.png")?>" width="120" height="120">
                            </div>
                            <div class="col-7">
                                <div class="card-body">
                                    <h6 class="card-subtitle mb-2 text-body-secondary">Sinh viên thực hiện</h6>
                                    <h4 class="mb-2">Phạm Lê Huyền Trang</h4>
                                    <p class="mb-1">Khoa: Công nghệ thông tin</p>
                                    <p class="mb-1">Chuyên ngành: Kỹ thuật phần mềm</p>
                                    <p class="mb-1">Lớp: DCT1208</p>
                                    <p class="mb-1">MSSV: 3120410012</p>
                                    <ul class="bsb-social-media nav m-0">
                                        <li class="nav-item">
                                            <a class="nav-link link-dark" href="#!">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 512 512">
                                                    <path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
          </div>
        </div>
        <script src="" async defer></script>
    </body>
</html>