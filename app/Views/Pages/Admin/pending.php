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
            .list_item {
                height: 7rem;
            }
            .zoom {
                transition: transform .2s; /* Animation */
                margin: 0 auto;
            }

            .zoom:hover {
                transform: scale(2.0); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
                cursor:zoom-in;
            }
        </style>
    </head>
    <body class="h-100">
        <div class="d-flex flex-norwrap p-0 h-100 ">
            <?php 
                echo view("components/sidebar/index");
            ?>
            <div class="h-100 w-100 d-flex justify-content-center bg-white">
                <div class="mt-xxl-5" style="height: 90%;width: 80%;">
                    <div class="w-100 d-flex justify-content-center position-relative">
                        <div class="w-100 h-100 position-absolute d-flex align-items-center ">
                            <a href="/admin" class="btn btn-secondary" style="max-height: 3rem;"><i class="fa-solid fa-arrow-left me-2"></i>Back</a>
                        </div>
                        <span class="fs-2 fw-bold py-4">Thông tin chứng chỉ</span>
                    </div>
                    <div class="container w-100 d-flex justify-content-center rounded bg-white">
                        <div class="row w-100 d-flex justify-content-center">
                            <div class="w-50 col-md-5 border-right">
                                <div class="row w-100 text-center py-2">
                                    <img class="col-16 mt-5 zoom" width="700rem" src="<?php echo base_url()."uploads/full.png"?>">
                                    <img class="col-6 mt-5 zoom" width="200rem" src="<?php echo base_url()."uploads/information.png"?>">
                                    <img class="col-6 mt-5 zoom" width="200rem" src="<?php echo base_url()."uploads/score.png"?>">
                                    <!-- <h5 class="font-weight-bold p-4">ADU</h5> -->
                                </div>
                            </div>
                            <div class="col-md-5 border-right">
                                <div class="row mt-3">
                                    <div class="col-md-12 p-2">
                                        <label class="labels p-2 ">Tên chứng chỉ</label>
                                        <input type="text" form="form" class="form-control" disabled="disabled" value="<?php echo $data["certificate"]["name"]?>">
                                    </div>
                                    <div class="col-md-6 p-2">
                                        <label class="labels p-2 ">Điểm reading</label>
                                        <input type="text" form="form" class="form-control" disabled="disabled" value="<?php echo $data["readingScore"]?>">
                                    </div>
                                    <div class="col-md-6 p-2">
                                        <label class="labels p-2 ">Điểm listening</label>
                                        <input type="text" form="form" class="form-control" disabled="disabled" value="<?php echo $data["listeningScore"]?>">
                                    </div>
                                    <div class="col-md-12 p-2">
                                        <label class="labels p-2 ">Điểm tổng cộng</label>
                                        <input type="text" form="form" class="form-control" disabled="disabled" value="<?php echo $data["totalScore"]?>">
                                    </div>
                                    <div class="col-md-6 p-2">
                                        <label class="labels p-2 ">Ngày thi</label>
                                        <input type="text" form="form" class="form-control" disabled="disabled" value="<?php echo $data["startDate"]?>">
                                    </div>
                                    <div class="col-md-6 p-2">
                                        <label class="labels p-2 ">Hết hạn</label>
                                        <input type="text" form="form" class="form-control" disabled="disabled" value="<?php echo $data["expiredDate"]?>">
                                    </div>
                                    <div class="col-md-12 d-flex justify-content-end align-items-center py-4">
                                        <button type="submit" form="form" class="btn btn-danger me-4 fw-medium">Không hợp lệ</button>
                                        <button type="submit" form="form" class="btn btn-primary fw-medium">Hợp lệ</button>
                                    </div>
                                </div>
                            </div>
                            <form id="form" action="/admin/delete" action="post"></form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="" async defer></script>
    </body>
</html>