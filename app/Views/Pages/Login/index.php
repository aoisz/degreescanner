<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <![endif]-->
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
                height: -webkit-fill-available;;
            }
        </style>
    </head>
    <body class="h-100">
        <div class="d-flex flex-norwrap p-0 h-100 w-100 justify-content-center align-items-center">
            <div class="d-flex flex-row w-75 h-75 shadow">
                <div class="d-flex justify-content-center align-content-center leftPanel" style="flex-basis: 60%; background-color: rgba(220, 255, 255, 0.3)">
                    <div class="w-50 h-100 d-flex flex-column justify-content-around align-content-center">
                        <div class="w-100 d-flex flex-row justify-content-center align-items-center p-lg-">
                            <img id="logo" src="<?php echo base_url("img/SGU-LOGO.png")?>" class="rounded-circle object-fit-cover" width="72" height="72" style="margin: 0px 6px;">
                            <h2 class="fw-bold fs-3" style="color: #135582">Trường Đại học Sài Gòn</h2>
                        </div>

                        <div class="w-100">
                            <h2 class="fw-bold fs-1 mb-16 mb-md-32">Hệ thống nhận chuẩn đầu ra (CĐR) cho sinh viên trường Đại học Sài Gòn.</h2>
                        </div>

                        <div class="d-flex flex-column flex-wrap justify-content-around align-items-start">
                            <h6 class="fw-bold fs-4 mb-10 pb-3">Chúng tôi hỗ trợ bạn: </h6>
                            <div class="d-flex flex-colum justify-content-center align-items-center pb-3">
                                <input class="form-check-input rounded-circle" type="checkbox" value="" checked disabled>
                                <label class="fw-normal ms-2 fs-6" for="">
                                    Nhận diện chuẩn đầu ra chứng chỉ tin học
                                </label>
                            </div>
                            <div class="d-flex flex-colum justify-content-center align-items-center">
                                <input class="form-check-input rounded-circle" type="checkbox" value="" checked disabled>
                                <label class="fw-normal ms-2 fs-6" for="">
                                    Nhận diện chuẩn đầu ra chứng chỉ tiếng anh
                                </label>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="d-flex justify-content-center align-items-center flex-fill rightPanel" style="background-color: #F8FAFC">
                    <form action="/login/check" method="post" class="h-100 w-100">
                        <div class="h-100 w-100 d-flex flex-column justify-content-center align-items-center">
                            <div class="form-group w-50 pb-5">
                                <label for="email" class="form-label fw-bold">Mã số sinh viên <span class=" text-danger">*</span></label>
                                <input type="text" class="form-control p-3" name="user_name_lg" placeholder="Nhập mã số sinh viên" required>
                            </div>

                            <div class="form-group w-50 pb-5">
                                <label for="pwd" class="form-label fw-bold">Mật khẩu <span class=" text-danger">*</span></label>
                                <input type="password" class="form-control p-3" name="passlg" placeholder="Nhập mật khẩu" required>
                            </div>

                            <!-- <a href="/" class="w-100 d-flex justify-content-center align-items-center"> -->
                                <button type="submit" class="btn btn-primary p-3 shadow w-50" name="dangnhap">Đăng nhập</button>
                            <!-- </a> -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="" async defer></script>
    </body>
</html>