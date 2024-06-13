<?php
    namespace App\Controllers;
    use App\Libraries\Session;
?>
<style>
    .dropdown-toggle::after {
        content: none;
    }
</style>
<div class="container w-100 d-flex justify-content-center rounded bg-white mt-5 mb-5 position-relative">
    <div class="w-100 position-absolute d-flex align-items-center ">
        <?php
            if (isset($_SESSION["admin"])) {
                echo '
                    <a href="/admin" class="btn btn-secondary" style="max-height: 3rem;"><i class="fa-solid fa-arrow-left me-2"></i>Back</a>
                ';
            }
            else {
                echo '
                    <a href="/history" class="btn btn-secondary" style="max-height: 3rem;"><i class="fa-solid fa-arrow-left me-2"></i>Back</a>
                ';
            }
        ?>
    </div>
    <div class="row w-100 d-flex justify-content-center">
        <div class="w-50 col-md-5 border-right m-5">
            <div class="row w-100 text-center p-3">
                <img class="col-16 mt-5 zoom" width="700rem" src="<?php echo $data["images"]["fullImage"]?>">
                <img class="col-6 mt-5 zoom" width="200rem" src="<?php echo $data["images"]["inforImage"]?>">
                <img class="col-6 mt-5 zoom" width="200rem" src="<?php echo $data["images"]["scoreImage"]?>">
                <!-- <h5 class="font-weight-bold p-4">ADU</h5> -->
            </div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h2 class="text-right">THÔNG TIN CHỨNG CHỈ</h2>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12 p-2">
                        <label class="labels p-2 ">Tên chứng chỉ</label>
                        <input type="text" class="form-control" disabled="disabled" value="<?php echo $data["certificate"]["name"]?>">
                    </div>
                    <div class="col-md-6 p-2">
                        <label class="labels p-2 ">Điểm reading</label>
                        <input type="text" class="form-control" disabled="disabled" value="<?php echo $data["readingScore"]?>">
                    </div>
                    <div class="col-md-6 p-2">
                        <label class="labels p-2 ">Điểm listening</label>
                        <input type="text" class="form-control" disabled="disabled" value="<?php echo $data["listeningScore"]?>">
                    </div>
                    <div class="col-md-12 p-2">
                        <label class="labels p-2 ">Điểm tổng cộng</label>
                        <input type="text" class="form-control" disabled="disabled" value="<?php echo $data["totalScore"]?>">
                    </div>
                    <div class="col-md-6 p-2">
                        <label class="labels p-2 ">Ngày thi</label>
                        <input type="text" class="form-control" disabled="disabled" value="<?php echo $data["startDate"]?>">
                    </div>
                    <div class="col-md-6 p-2">
                        <label class="labels p-2 ">Hết hạn</label>
                        <input type="text" class="form-control" disabled="disabled" value="<?php echo $data["expiredDate"]?>">
                    </div>
                    <?php
                        if (isset($_SESSION["admin"])) {
                            echo '
                             <div class="col-md-12 p-2 d-flex flex-column">
                                <label class="labels p-2">Trạng thái</label>
                                <div class="dropdown w-100 d-flex justify-content-between">
                                    <button class="btn btn-secondary dropdown-toggle d-flex justify-content-between align-items-center" id="statusDropdownMenuButton" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="width:40%">
                                        <span class="flex-1" id="dropdownValue">'.$data["status"]["name"].'</span> 
                                        <i id="dropdown-icon" class="d-flex align-items-center fa-solid fa-angle-down ms-2 mt-1"></i>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="statusDropdownMenuButton">
                                        <li><a class="dropdown-item" href="#" onclick="changeDropdownValue(this)">Hợp lệ</a></li>
                                        <li><a class="dropdown-item" href="#" onclick="changeDropdownValue(this)">Không hợp lệ</a></li>
                                    </ul>
                                    <form action="/admin/authenticate" method="post">
                                        <input class="d-none" id="statusValue" name="statusValue">
                                        <input class="d-none" name="certId" value="'. $data["id"] .'">
                                        <button disabled id="submitBtn" class="btn btn-primary" type="submit">Lưu</button>
                                    </form>
                                </div>
                            </div>
                            ';
                        }
                        else {
                            echo '
                                <div class="col-md-12 p-2">
                                    <label class="labels p-2 ">Trạng thái</label>
                                    <input type="text" class="form-control" disabled="disabled" value="'.$data["status"]["name"].'">
                                </div>
                            ';
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .zoom {
        transition: transform .2s; /* Animation */
        margin: 0 auto;
    }

    .zoom:hover {
        transform: scale(1.5); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
        cursor:zoom-in;
    }
</style>
<script>
    function changeDropdownValue(item) {
        document.getElementById("dropdownValue").innerHTML = item.innerHTML;
        document.getElementById("statusValue").value = item.innerHTML;
        document.getElementById("submitBtn").disabled = false;
    }
</script>
<div class="zoom"></div>