<?php 
    $haveData = count($data) > 0;
?>

<form action="scan" method="post" class="formContainer row d-flex g-3 w-25 h-50 ms-5">
    <div class="col-12">
        <label for="studentName" class="form-label">Tên sinh viên</label>
        <input type="text" name="studentName" class="form-control" value="<?php echo $haveData ? $data["studentName"] : "" ?>">
    </div>
    <div class="col-12">
        <label for="birthDay" class="form-label">Ngày sinh</label>
        <input type="text" name="birthDay" class="form-control" value="<?php echo $haveData ? $data["birthDay"] : "" ?>">
    </div>
    <div class="col-6">
        <label for="certTestDate" class="form-label">Thời gian test</label>
        <input type="text" name="certTestDate" class="form-control" value="<?php echo $haveData ? $data["testDate"] : "" ?>">
    </div>
    <div class="col-6">
        <label for="certExpiredDate" class="form-label">Hết hạn</label>
        <input type="text" name="certExpiredDate" class="form-control" value="<?php echo $haveData ? $data["validUntil"] : "" ?>">
    </div>
    <div class="col-12 d-flex justify-content-lg-end">
        <button id="submitBtn" type="submit" class="btn btn-primary btn-lg">
            Next
            <i class="fa-solid fa-arrow-right"></i>
        </button>
    </div>
    <div class="col-12">
        <h3 class="text-danger">* Lưu ý các bạn cần kiểm tra lại thông tin trước khi tiếp tục</h3>
    </div>
    <input id="imagePathInput" type="text" name="inforImagePath" class="d-none" value="<?php echo $imagePath ?>">
    <input type="text" name="typeUploader" class="d-none" value="information">
</form>

<script>
    const submitBtn = document.getElementById("submitBtn");
    const imagePathInput = document.getElementById("imagePathInput");
    if(imagePathInput.value === "") {
        submitBtn.disabled = true;
    }
    else {
        submitBtn.disabled = false;
    }
</script>