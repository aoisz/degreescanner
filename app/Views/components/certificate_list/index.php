<div class="d-flex justify-content-center w-100 h-90 pt-5">
    <div class="w-75 overflow-hidden">
        <div class="text-uppercase fs-4 fw-bolder pb-3">Danh Sách Chứng Chỉ</div>
        <div class="scrollList d-flex flex-column w-100 overflow-y-auto" style="height: 90%;" webkit>
            <?php 
                foreach($data as $item) {
                    echo view_cell("CertificateList::showRow", $item);
                }
            ?>
        </div>
    </div>
</div>

<style>
    
</style>