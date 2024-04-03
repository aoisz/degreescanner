<div class="card bg-light shadow mx-2 rounded" style="height: 23rem;width: 18rem;">
    <image class="card-image-top border-bottom" alt="Certificate Image" style="height: 180px;width: 286px;"></image>
    <div class="card-body d-flex flex-column">
        <div class="content">
            <div class="date d-flex justify-content-center w-100">
                <?= $startDate . ' - ' . $expiredDate ?>
            </div>
            <h4 class="name card-title d-flex justify-content-center w-100 mt-2"><?= $name ?></h4>
            <div class="score d-flex justify-content-center">
                Điểm: <?= $score ?>
            </div>
        </div>
        <div class="d-flex" style="width: 80px"><div class="hr"></div></div>
        <div class="d-flex justify-content-center align-items-center px-4 mt-2 h-100">
            <a href="/certificate/<?= $id ?>/" class="btn btn-secondary mx-1">
                <i class="fa-regular fa-eye"></i>
            </a>
            <button class="btn btn-danger mx-1" type="button" data-toggle="modal" data-target="#deleteModal<?= $id?>">
                <i class="fa-solid fa-trash"></i>
            </button>
        </div>
    </div>
</div>