<?php 
    $haveData = count($data) > 0 ? true : false;
?>

<form action="/test" method="post" class="formContainer row d-flex g-3 w-25 h-50 ms-5">
    <div class="col-12">
        <label for="certName" class="form-label">Tên chứng chỉ</label>
        <input readonly type="text" class="form-control" value="<?php echo $haveData ? $data["name"] : "" ?>">
    </div>
    <div class="col-6">
        <label for="certTestDate" class="form-label">Thời gian test</label>
        <input readonly type="text" class="form-control" value="<?php echo $haveData ? $data["testDate"] : "" ?>">
    </div>
    <div class="col-6">
        <label for="certExpiredDate" class="form-label">Hết hạn</label>
        <input readonly type="text" class="form-control" value="<?php echo $haveData ? $data["validUntil"] : "" ?>">
    </div>
    <div class="col-12">
        <label for="certScore" class="form-label">Điểm/Loại</label>
        <input readonly type="text" class="form-control" placeholder="990, 9,...">
    </div>
    <div class="col-12 justify-self-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>