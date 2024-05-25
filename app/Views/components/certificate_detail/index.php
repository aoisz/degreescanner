<?php
    // echo "ec";
?>

<div class="container w-100 d-flex justify-content-center rounded bg-white mt-5 mb-5 position-relative">
    <div class="w-100 position-absolute d-flex align-items-center ">
        <a href="/history" class="btn btn-secondary" style="max-height: 3rem;"><i class="fa-solid fa-arrow-left me-2"></i>Back</a>
    </div>
    <div class="row w-100 d-flex justify-content-center">
        <div class="w-50 col-md-5 border-right m-5">
            <div class="row w-100 text-center p-3 py-5">
                <img class="col-16 mt-5 zoom" width="700rem" src="<?php echo base_url()."uploads/full.png"?>">
                <img class="col-6 mt-5 zoom" width="200rem" src="<?php echo base_url()."uploads/information.png"?>">
                <img class="col-6 mt-5 zoom" width="200rem" src="<?php echo base_url()."uploads/score.png"?>">
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
        transform: scale(2.0); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
        cursor:zoom-in;
    }
</style>

<div class="zoom"></div>