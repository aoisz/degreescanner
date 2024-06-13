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
                $pwdChangeStatus = null;
            ?>
            <!-- container -->
            <div class="container w-100 d-flex justify-content-center rounded bg-white mt-5 mb-5 position-relative">
                <?php
                    if(isset($_SESSION["pwdChangeStatus"])) {
                        $pwdChangeStatus = $_SESSION["pwdChangeStatus"];
                        if($pwdChangeStatus === "updated") {
                            echo '
                                <div class="position-absolute alert alert-primary alert-dismissible fade show" role="alert">
                                    <strong>Cập nhật mật khẩu thành công!</strong>
                                    <a href="#" class="close h4 text-decoration-none " data-dismiss="alert" aria-label="close" onclick="hide()" style="padding-left:12px">&times;</a>
                                </div>
                            ';
                        }
                        else if($pwdChangeStatus === "old_wrong") {
                            echo '
                                <div class="position-absolute alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>Mật khẩu cũ không chính xác</strong> Vui lòng kiểm tra lại mật khẩu.
                                    <a href="#" class="close h4 text-decoration-none " data-dismiss="alert" aria-label="close" onclick="hide()" style="padding-left:12px">&times;</a>
                                </div>
                            ';
                        }
                        else if($pwdChangeStatus === "same") {
                            echo '
                                <div class="position-absolute alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>Mật khẩu mới phải khác mật khẩu cũ</strong> Vui lòng kiểm tra lại mật khẩu.
                                    <a href="#" class="close h4 text-decoration-none " data-dismiss="alert" aria-label="close" onclick="hide()" style="padding-left:12px">&times;</a>
                                </div>
                            ';
                        }
                    }
                ?>
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
                                        <img class="rounded-circle mt-5" width="250px" src="'.base_url($src).'">
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
                            <form action="/changePassword" method="post" id="change_pwd_form">
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Mật khẩu cũ:</label>
                                    <input class="form-control old_pwd_input" type="password" name="old_password" id="old_password" required>
                                </div>
                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label">Mật khẩu mới:</label>
                                    <input class="form-control new_pwd_input" type="password" name="new_password" id="new_password" required>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                            <button form="change_pwd_form" type="submit" class="btn btn-primary" id="save_btn" disabled>Lưu</button>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

    <script>
        function hide() {
            const note = document.querySelector('.alert');
            console.log(note);
            note.classList.remove("show");
            note.remove();
        }
        const submitBtn = document.getElementById("save_btn");
        document.getElementById("new_password").oninput = (e) => {
            if(e.target.value.length > 8) {
                submitBtn.disabled = false;
            }
            else {
                submitBtn.disabled = true;
            }
        }
    </script>
</html>