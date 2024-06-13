<div class="d-flex justify-content-center w-100 h-90 pt-5 bg-light">
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header d-flex justify-content-between align-items-center">
                <h5 class="modal-title" id="deleteModalLabel">XÁC NHẬN</h5>
                <button type="button" class="close fs-4 btn btn-light" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="delete_form" action="/delete" method="post">
                    Xác nhận xoá chứng chỉ ?
                    <div class="form-group">
                        <input type="text" class="form-control d-none" name="id">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                <button type="submit" form="delete_form" class="btn btn-danger">Xoá</button>
            </div>
            </div>
        </div>
    </div>
    <div class="w-75 overflow-hidden">
        <div class="text-uppercase fs-4 fw-bolder pb-3">Danh Sách Chứng Chỉ</div>
        <div class="scrollList d-flex flex-column w-100 overflow-y-auto px-2" style="height: 90%;" webkit>
            <?php 
                if(count($data) > 0) {
                    foreach($data as $item) {
                        echo view_cell("CertificateList::showRow", $item);
                    }
                }
                else {
                    echo view_cell("CertificateList::showEmpty");
                }
            ?>
        </div>
    </div>
</div>

<style>
    
</style>

<script>
    $('#deleteModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var id = button.data('id')
        var modal = $(this)
        modal.find('.modal-body input').val(id);
    })
</script>