<div class="d-flex bg-white shadow-sm w-100 px-2 py-4 my-2" style="height: 108px">
    <div class="d-flex flex-grow-1 align-items-center infor">
        <div class="certName fw-bolder fs-3 text-uppercase ps-5 me-5 w-25"><?= $name?></div>
        <div class="fs-5 w-25"><span class="fw-bold">Điểm: </span><?= $score?></div>
        <div class="fs-5 w-25"><span class="fw-bold">Hết hạn: </span><?= $expiredDate?></div>
    </div>
    <div class="buttons d-flex flex-row justify-content-center align-items-center">
        <a href="/certificate/<?= $id ?>/" class="btn btn-secondary mx-1">
            <i class="fa-regular fa-eye"></i>
        </a>
        <button class="btn btn-danger mx-1" type="button" data-toggle="modal" data-target="#deleteModal<?= $id?>">
            <i class="fa-solid fa-trash"></i>
        </button>
    </div>
</div>

<style>

</style>