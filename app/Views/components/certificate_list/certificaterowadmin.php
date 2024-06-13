<?php 
    $expiredDate = explode(" ", $expiredDate);
    $expiredDate = $expiredDate[0];
    $expiredDate = explode("-", $expiredDate);
    array_reverse($expiredDate);
    $expiredDate = implode("-",$expiredDate);
?>

    <li class="list_item bg-body-tertiary mx-4 my-4 shadow rounded-2 position-relative">
        <div class="d-flex justify-content-around align-items-center w-75 h-100">
            <span class="w-50 fs-4 fw-medium"><strong>Sinh viên :    </strong><?= $studentName?></span>
            <span class="w-25 fs-4"><strong>Chứng chỉ :    </strong> TOEIC</span>
        </div>
        <div class="position-absolute end-0 top-0 bottom-0 d-flex align-items-center">
            <?php
                if ($status === "Chưa xác thực") {
                    echo '
                        <div class="btn btn-light border-1 border-secondary-subtle px-4 py-2 me-4 pe-none bg-warning" style="width:150px">
                            <a class="text-decoration-none text-black pe-none">Chưa xác thực</a>
                        </div>
                    ';
                }
                else if ($status === "Hợp lệ"){
                    echo '
                        <div class="btn btn-light border-1 border-secondary-subtle px-4 py-2 me-4 pe-none bg-success" style="width:150px">
                            <a class="text-decoration-none text-black pe-none">Hợp lệ</a>
                        </div>
                    ';
                }
                else {
                    echo '
                        <div class="btn btn-light border-1 border-secondary-subtle px-4 py-2 me-4 pe-none bg-danger" style="width:150px">
                            <a class="text-decoration-none text-black pe-none">Không hợp lệ</a>
                        </div>
                    ';
                }
            ?>
            <!-- <div class="btn btn-light border-1 border-secondary-subtle px-4 py-2 me-4 pe-none bg-warning">
                <a class="text-decoration-none text-black pe-none"><?= $status?></a>
            </div> -->
            <a href="/certificate/<?= $id ?>/"  class="btn btn-light border-1 border-secondary-subtle px-4 py-2 me-4">
                <span class="text-decoration-none text-black">Xem</span>
            </a>
        </div>
    </li>
    
<style>
    
</style>