<div class="w-75 h-75 mt-xxl-5">
    <div class="w-100 d-flex justify-content-center">
        <span class="fs-2 fw-bold py-4">Danh sách chứng chỉ chờ duyệt</span>
    </div>
    <ul class="w-100 h-100 list-unstyled overflow-y-scroll">
            <?php 
                if(count($data) > 0) {
                    foreach($data as $item) {
                        echo view_cell("CertificateList::showRowAdmin", $item);
                    }
                }
                else {
                    echo view_cell("CertificateList::showEmptyAdmin");
                }
            ?>
    </ul>
</div>
<style>
    
</style>