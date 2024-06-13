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
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
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
            <div class="h-100 w-100 d-flex flex-column align-items-center bg-white pt-5 position-relative">
                <?php
                    if(isset($_SESSION["success"])) {
                        if($_SESSION["success"] === true) {
                            echo '
                                <div class="alert alert-primary alert-dismissible fade show position-absolute" role="alert">
                                    <strong>Đã reset mật khẩu của tài khoản</strong>
                                    <a href="#" class="close h4 text-decoration-none " data-dismiss="alert" aria-label="close" onclick="hide()" style="padding-left:12px">&times;</a>
                                </div>
                            ';
                        }
                    }
                ?>
                <div class="h2">DANH SÁCH TÀI KHOẢN</div>
                <div class="search_container my-3 w-50 d-flex justify-content-center">
                    <form action="/admin/search" method="post" class="w-50">
                        <div class="input-group">
                            <input type="text" class="form-control" name="search_data" placeholder="Mã số sinh viên" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="submit" name="submit" value="search">Tìm</button>
                                <button class="btn btn-outline-danger" type="submit" name="submit" value="cancel">Huỷ</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="list_container h-75 w-50 overflow-y-scroll">
                    <ul class="list-group w-100 h-100">
                        <?php
                            $isSearching = false;
                            $search_data = "";
                            if(isset($_SESSION["is_searching"])) {
                                $data = json_decode($_SESSION["is_searching"]);
                            }
                            else {
                                $data = json_decode($data);
                            }
                            foreach($data as $item) {
                                echo '
                                    <li class="list-group-item mb-2 py-3 d-flex justify-content-between align-items-center shadow">
                                        <div class="fs-4 ms-4"><strong>Tên tài khoản: </strong>'.$item->username.'</div>
                                        <div class="button-group">
                                            <button class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#accountInfoModal'. $item->id .'">Xem</button>
                                            <button class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#resetAccountPwdModal" data-id="'. $item->student->studentId .'">Reset</button>
                                        </div>
                                    </li>
                                    <div class="modal fade" id="accountInfoModal'. $item->id .'" tabindex="-1" aria-labelledby="accountInfoModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="accountInfoModalLabel">Thông tin tài khoản</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body row">
                                                    <div class="col-md-12 input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Tên sinh viên</span>
                                                        <input readonly type="text" class="form-control" value="' . $item->student->lastName . ' ' . $item->student->firstName . '" aria-label="Username" aria-describedby="basic-addon1">
                                                    </div>
                                                    <div class="col-md-12 input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Mã số sinh viên</span>
                                                        <input readonly type="text" class="form-control" value="' . $item->student->studentId . '" aria-label="Username" aria-describedby="basic-addon1">
                                                    </div>
                                                    <div class="col-md-12 input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Ngày sinh</span>
                                                        <input readonly type="text" class="form-control" value="' . $item->student->dateOfBirth . '" aria-label="Username" aria-describedby="basic-addon1">
                                                    </div>
                                                    <div class="col-md-12 input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Giới tính</span>
                                                        <input readonly type="text" class="form-control" value="' . $item->student->gender . '" aria-label="Username" aria-describedby="basic-addon1">
                                                    </div>
                                                    <div class="col-md-12 input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">Mã lớp</span>
                                                        <input readonly type="text" class="form-control" value="' . $item->student->classId . '" aria-label="Username" aria-describedby="basic-addon1">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                ';
                            }
                        ?>
                    </ul>
                </div>
                <div class="modal fade" id="resetAccountPwdModal" tabindex="-1" aria-labelledby="resetAccountPwdModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="resetAccountPwdModalLabel">Thông tin tài khoản</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="/admin/reset" method="post" id="reset_form">
                                    <span class="input-group-text" id="basic-addon1">Xác nhận reset mật khẩu tài khoản này?</span>
                                    <input type="text" class="form-control d-none" name="studentId">
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                <button form="reset_form" type="submit" class="btn btn-danger">Reset</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $('#resetAccountPwdModal').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget)
                var id = button.data('id')
                var modal = $(this)
                modal.find('.modal-body input').val(id);
            })
            function hide() {
                const note = document.querySelector('.alert');
                console.log(note);
                note.classList.remove("show");
                note.remove();
            }
        </script>
    </body>
</html>