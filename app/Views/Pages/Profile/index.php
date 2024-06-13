<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Degree Scanner</title>
        <meta name="description" content="Degree Scanner">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="<?php echo base_url("bootstrap/bootstrap.min.css")?>" rel="stylesheet">
        <script src="<?php echo base_url("bootstrap/bootstrap.bundle.min.js")?>" defer></script>
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
                use App\Libraries\Session;
                $session = new Session();
                echo view("components/sidebar/index");
            ?>
            <!-- container -->
            <div class="container w-100 d-flex justify-content-center rounded bg-white mt-5 mb-5">
                <div class="row w-100 d-flex justify-content-center">
                    <div class="col-md-3 border-right m-5">
                        <?php
                            $student = array();
                            $scr = "";
                            if(isset($_SESSION["student"])) {
                                $student = $_SESSION["student"];
                                if ($student->gender === "Nữ") {
                                    $src = "img/girlavt.png";
                                }
                                else {
                                    $src = "img/menavt.png";
                                }
                                echo '
                                    <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                                        <img class="rounded-circle mt-5" width="250px" src="'.$src.'">
                                        <h5 class="font-weight-bold p-4">'.$student->lastName. ' '. $student->firstName.'</h5>
                                    </div>
                                ';
                            }
                            ?>
                    </div>
                    <div class="col-md-5 border-right">
                        <div class="p-3 py-5">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h2 class="text-right">THÔNG TIN SINH VIÊN</h2>
                            </div>
                            <div class="row mt-3">
                                <?php
                                      $student = array();
                                      if(isset($_SESSION["student"])) {
                                          $student = $_SESSION["student"];
                                          echo '
                                              <div class="col-md-12 p-2"><label class="labels p-2 ">Họ và tên</label><input type="text" class="form-control" disabled="disabled" value="'.$student->lastName. ' '. $student->firstName.'"></div>
                                              <div class="col-md-12 p-2"><label class="labels p-2 ">Lớp</label><input type="text" class="form-control" disabled="disabled" value="'.$student->classId.'"></div>
                                              <div class="col-md-12 p-2"><label class="labels p-2 ">Mã số sinh viên</label><input type="text" class="form-control" disabled="disabled" value="'.$student->studentId.'"></div>
                                              <div class="col-md-12 p-2"><label class="labels p-2 ">Giới tính</label><input type="text" class="form-control" disabled="disabled" value="'.$student->gender.'"></div>
                                              <div class="col-md-12 p-2"><label class="labels p-2 ">Ngày sinh</label><input type="text" class="form-control" disabled="disabled" value="'.$student->dateOfBirth.'"></div>
                                          ';
                                      }
                                ?>
                                <div class="col-md-12 p-2 d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#changePwdModal">Đổi mật khẩu</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="changePwdModal" tabindex="-1" aria-labelledby="changePwdModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                        <div class="modal-header d-flex">
                            <h5 class="modal-title" id="changePwdModalLabel">Đổi mật khẩu</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="/changePassword" method="post">
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Mật khẩu cũ:</label>
                                    <input type="password" name="old_password" class="form-control" id="old_password">
                                </div>
                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label">Mật khẩu mới:</label>
                                    <input type="password" name="new_password" class="form-control" id="new_password"></input>
                                </div>
                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label">Nhập lại mật khẩu mới:</label>
                                    <input type="password" name="new_password_again" class="form-control" id="new_password_again"></input>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                            <button type="button" class="btn btn-primary">Lưu</button>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>