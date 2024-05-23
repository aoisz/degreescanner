<?php 
    $haveData = count($data) > 0;
?>

<form action="scan" method="post" class="formContainer row d-flex g-3 w-25 h-50 ms-5">
    <div class="col-12">
        <h3 class="text-danger">* Lưu ý các bạn cần kiểm tra lại thông tin trước khi upload</h3>
    </div>
    <div class="col-12 d-flex justify-content-center" style="height: 15%">
        <button id="submitBtn" type="submit" class="btn btn-primary">
            Tiếp tục
            <i class="fa-solid fa-arrow-right"></i>
        </button>
    </div>
    <input id="imagePathInput" type="text" name="imagePath" class="d-none" value="<?php echo $imagePath ?>">
    <input type="text" name="typeUploader" class="d-none" value="full">
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