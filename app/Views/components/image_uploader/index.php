<?php
    $haveImage = strlen($imagePath) > 0;
    $imageName =  $typeUploader.'.png';
?>
<div role="button" class="dropContainer d-flex justify-content-center align-items-center" style="height: 75%; width: 35%;">
    <div class="body d-flex flex-column justify-content-center align-items-center">
        <i class="<?php echo $haveImage ? 'd-none' : '' ?> icon fa-regular fa-file-image mb-5"></i>
        <img id="certificateImage" src="<?php echo $haveImage ? base_url('uploads/'.$imageName) : '#' ?>" class="<?php echo $haveImage ? '' : 'd-none'?> img-fluid object-fit-contain ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|} mb-3" alt="image">
        <span class="text-uppercase fs-5 w-75 text-center">Thả hoặc nhấn vào <span class=" text-decoration-underline text-info">đây</span> để chọn file</span>
        <input form="processImage" id="imageFile" name="imageFile" type="file" accept="image/*" value="<?php echo $haveImage ? base_url('uploads/'.$imageName) : "" ?>">
    </div>
</div>
<input id="submitImage" form="processImage" type="submit" class="d-none">
<input name="typeUploader" form="processImage" type="text" class="d-none" value="<?php echo $typeUploader ?>">
<form action="/processImage" method="post" id="processImage" enctype="multipart/form-data"></form>
<form action="/addCertificate" method="post" id="addCertificate"></form>

<style>
    .dropContainer {
        border: 2px dashed black;
    }
    .icon {
        font-size: 12rem;
    }
    #imageFile {
        display: none;
    }
    #certificateImage {
        height: 22rem;
    }
</style>

<script>
    const dropContainer = document.querySelector(".dropContainer");
    const imageFile = document.getElementById("imageFile");
    const certificateImage = document.getElementById("certificateImage");
    const icon = document.querySelector(".icon");
    const submitImageBtn = document.getElementById("submitImage");

    dropContainer.ondragover = dropContainer.ondragenter = (evt) => {
        evt.preventDefault();
    } 
    dropContainer.onclick = () => {
        imageFile.click();
    }
    dropContainer.ondrop = (evt) => {
        
    }

    imageFile.onchange = () => {
        icon.classList.add("d-none");
        certificateImage.src = URL.createObjectURL(imageFile.files[0]);
        certificateImage.classList.remove("d-none");
        submitImage.click();
    }
</script>