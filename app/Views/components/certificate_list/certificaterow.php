<?php 
    $expiredDate = explode(" ", $expiredDate);
    $expiredDate = $expiredDate[0];
    $expiredDate = explode("-", $expiredDate);
    array_reverse($expiredDate);
    $expiredDate = implode("-",$expiredDate);

    
    // $expiredDate = explode(" ", $expiredDate);
    // $expiredDate = $expiredDate[0];
    // $expiredDate = explode("-", $expiredDate);
    // array_reverse($expiredDate);
    // $expiredDate = implode("-",$expiredDate);
?>

<div class="d-flex justify-content-between  bg-white shadow-sm w-100 px-2 py-4 my-2" style="height: 108px">
    <div class="certName d-flex flex-column justify-content-center ps-5 me-5 "><span class="fw-bolder fs-3 text-uppercase"><?= $name?></span></div>
    <div class="d-flex flex-row align-items-center  justify-content-between w-50">
        <div class="d-flex flex-grow-1 align-items-baseline justify-content-between infor">
            <div class="fs-5 "><span class="fw-bold">Điểm: </span><?= $totalScore?></div>
            <!-- <div class="fs-5 "><span class="fw-bold">Ngày thi: </span><?= $expiredDate?></div> -->
        </div>
        <div class="d-flex flex-grow-1 align-items-center infor">
            <div class="fs-5 "><span class="fw-bold">Hết hạn: </span><?= $expiredDate?></div>
            <!-- <div class="fs-5 w-50"><span class="fw-bold">Listening: </span><?= $listening?></div>
            <div class="fs-5 w-50"><span class="fw-bold">Reading: </span><?= $reading?></div> -->
        </div>
    </div>
    <div class="buttons d-flex flex-row justify-content-center align-items-center">
        <a href="/certificate/<?= $id ?>/" class="btn btn-secondary mx-1">
            <i class="fa-regular fa-eye"></i>
        </a>
        <a href="/delete/<?= $id ?>/" class="btn btn-danger mx-1">
            <i class="fa-solid fa-trash"></i>
        </a>
        <!-- <a class="btn btn-danger mx-1" type="button" data-toggle="modal" data-target="#deleteModal<?= $id?>"> -->
            <!-- <i class="fa-solid fa-trash"></i> -->
        <!-- </a> -->
    </div>
</div>

<style>

</style>