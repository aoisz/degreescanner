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
        </style>
    </head>
    <body class="h-100">
        <div class="d-flex flex-norwrap p-0 h-100 ">
            <?php 
                echo view("components/sidebar/index");
            ?>
            <div class="h-100 w-100 d-flex justify-content-center bg-white">
                <div class="w-75 h-75 mt-xxl-5">
                    <div class="w-100 d-flex justify-content-center">
                        <span class="fs-2 fw-bold py-4">Danh sách chứng chỉ chờ duyệt</span>
                    </div>
                    <ul class="w-100 h-100 list-unstyled overflow-y-scroll">
                        <li class="list_item bg-body-tertiary mx-4 my-4 shadow rounded-2 position-relative">
                            <div class="d-flex justify-content-around align-items-center w-75 h-100">
                                <span class="w-50 fs-4 fw-medium"><strong>Sinh viên:</strong> Mai Thanh An</span>
                                <span class="w-25 fs-4"><strong>Chứng chỉ:</strong> TOEIC</span>
                            </div>
                            <div class="position-absolute end-0 top-0 bottom-0 d-flex align-items-center">
                                <div class="btn btn-light border-1 border-secondary-subtle px-4 py-2 me-4"><a href="admin/pending/1" class="text-decoration-none text-black">Xem</a></div>
                            </div>
                        </li>
                        
                        <li class="list_item bg-body-tertiary mx-4 my-4 shadow rounded-2 position-relative">
                            <div class="d-flex justify-content-around align-items-center w-75 h-100">
                                <span class="w-50 fs-4 fw-medium"><strong>Sinh viên:</strong> Phạm Lê Huyền Trang</span>
                                <span class="w-25 fs-4"><strong>Chứng chỉ:</strong> TOEIC</span>
                            </div>
                            <div class="position-absolute end-0 top-0 bottom-0 d-flex align-items-center">
                                <div class="btn btn-light border-1 border-secondary-subtle px-4 py-2 me-4"><a href="admin/pending/1" class="text-decoration-none text-black">Xem</a></div>
                            </div>
                        </li>
                        
                        <li class="list_item bg-body-tertiary mx-4 my-4 shadow rounded-2 position-relative">
                            <div class="d-flex justify-content-around align-items-center w-75 h-100">
                                <span class="w-50 fs-4 fw-medium"><strong>Sinh viên:</strong> Mai Thanh An</span>
                                <span class="w-25 fs-4"><strong>Chứng chỉ:</strong> TOEIC</span>
                            </div>
                            <div class="position-absolute end-0 top-0 bottom-0 d-flex align-items-center">
                                <div class="btn btn-light border-1 border-secondary-subtle px-4 py-2 me-4"><a href="admin/pending/1" class="text-decoration-none text-black">Xem</a></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <script src="" async defer></script>
    </body>
</html>