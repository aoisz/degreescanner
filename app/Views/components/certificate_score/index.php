<?php 
    $haveData = count($data) > 0;
?>

<form action="scan" method="post" class="formContainer row d-flex g-3 w-25 h-50 ms-5">
    <div class="col-6">
        <label for="certReadingScore" class="form-label">Điểm reading</label>
        <input type="text" name="readingScore" class="form-control" value="<?php echo $haveData ? $data["readingScore"] : "" ?>">
    </div>
    <div class="col-6">
        <label for="certListeningScore" class="form-label">Điểm listening</label>
        <input type="text" name="listeningScore" class="form-control" value="<?php echo $haveData ? $data["listeningScore"] : "" ?>">
    </div>
    <div class="col-12">
        <label for="totalScore" class="form-label">Điểm tổng</label>
        <input type="text" name="totalScore" class="form-control" value="<?php echo $haveData ? $data["totalScore"] : "" ?>">
    </div>
    <div class="col-12 d-flex justify-content-lg-end">
        <button id="submitBtn" type="submit" class="btn btn-primary btn-lg">
            Upload
            <i class="fa-solid fa-arrow-right"></i>
        </button>
    </div>
    <div class="col-12">
        <h3 class="text-danger">* Lưu ý các bạn cần kiểm tra lại thông tin trước khi tiếp tục</h3>
    </div>
    <input id="imagePathInput" type="text" name="scoreImagePath" class="d-none" value="<?php echo $imagePath ?>">
    <input type="text" name="typeUploader" class="d-none" value="score">
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