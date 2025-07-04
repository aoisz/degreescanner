<?php
    // echo $student;
    $sideBarList = array(
        "about" => [
            "icon" => "fa-solid fa-circle-info",
            "name" => "Giới thiệu"
        ],
    );
    $uri = $_SERVER['REQUEST_URI'];
    $uri = trim($uri, "/");
    $uri = explode('/', $uri);
    $student = array();
    if(isset($_SESSION["student"])) {
        $student = $_SESSION["student"];
        $sideBarList = [
            "scan" => [
                "icon" => "fa-regular fa-file-image",
                "name" => "Cập nhật chứng chỉ"
            ],
            "history" => [
                "icon" => "fa-regular fa-square-check",
                "name" => "Lịch sử cập nhật"
            ]
        ] + $sideBarList;
    }
    else if(isset($_SESSION["admin"])) {
        $sideBarList = [
            "admin" => [
                "icon" => "fa-solid fa-user-check",
                "name" => "Xác thực chứng chỉ"
            ],
            "accounts" => [
                "icon" => "fa-solid fa-users",
                "name" => "Quản lí tài khoản"
            ],
        ] + $sideBarList;
    }
    // echo json_encode($student);
?>
<style>
    .dropdown-toggle::after {
        content: none;
    }
</style>
<div id="sidebar" class="d-flex flex-column p-3 flex-shrink-0 text-bg-dark h-100 " style="width: 280px;">
    <div class="d-flex align-text-center text-center" style="min-height: 30px;">
        <i class="fa-solid fa-bars d-flex align-items-center justify-content-center px-3" style="cursor: pointer;" onclick=closeSideBar()></i>
        <a href="<?php isset($_SESSION["admin"]) ? "/admin" : "/scan" ?>" class="fs-5 fw-bold text-white text-decoration-none hiddenItem">Degree Scanner</a>
    </div>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <?php
            foreach($sideBarList as $key => $body) {
                $state = in_array($key, $uri) ? "active" : "";
                echo '<li class="nav-item"><a href="/'.$key.'" class="nav-link text-white side-bar '.$state.'" style="cursor: pointer;" aria-current="page"><i class="'.$body["icon"].' pe-3 menuIcon"></i><span class="text-uppercase hiddenItem">'.$body["name"].'</span></a></li>';
            }
        ?>
    </ul>
    <hr>
    <div class="dropdown">
        <?php
            if (isset($_SESSION["student_id"])) {
                echo '
                    <a href="#" id="infor" class="d-flex text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" onclick=changeDropdownIcon()>
                        <span class="d-flex align-items-center fs-6 text-center hiddenItem">'.$student->lastName. ' '. $student->firstName. '</span>
                        <i id="dropdown-icon" class="d-flex align-items-center fa-solid fa-angle-down ms-2 mt-1"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                        <li><a href="/profile" class="dropdown-item">Profile</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a href="/login" class="dropdown-item">Log Out</a></li>
                    </ul>
                ';
            }
            else if(isset($_SESSION["admin"])) {
                echo '
                    <a href="#" id="infor" class="d-flex text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" onclick=changeDropdownIcon()>
                        <span class="d-flex align-items-center fs-6 text-center hiddenItem">Admin</span>
                        <i id="dropdown-icon" class="d-flex align-items-center fa-solid fa-angle-down ms-2 mt-1"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                        <li><a href="/login" class="dropdown-item">Log Out</a></li>
                    </ul>
                ';
            }
            else {
                echo '<a href="/login" class="d-flex text-white text-decoration-none dropdown-toggle"><span class="d-flex align-items-center fs-6 text-center hiddenItem">LOGIN</span></a>';
            }
        ?>
    </div>
</div>
<script>
    function selectMenuItem() {
        if(window.location.pathname === "/scan/") {

        }
        items = document.querySelectorAll(".nav-link.side-bar");
        items.forEach((item) => {
            item.onclick = () => {
                items.forEach((element) => {
                    element.classList.remove("active");
                    element.classList.add("text-white");
                })
                item.classList.add("active");
                item.classList.remove("text-white");
            }
        });
    }
    selectMenuItem();

    function changeDropdownIcon () {
        let icon = document.getElementById("dropdown-icon");
        let classList = Object.values(icon.classList);
        if(classList.includes("fa-angle-down")) {
            icon.classList.remove("fa-angle-down");
            icon.classList.add("fa-angle-up")
        }
        else {
            icon.classList.add("fa-angle-down");
            icon.classList.remove("fa-angle-up");
        }
    }

    function closeSideBar () {
        let sidebar = document.getElementById("sidebar");
        let hiddenItems = document.querySelectorAll(".hiddenItem");
        let menuIcons = document.querySelectorAll(".menuIcon");
        let infor = document.getElementById("infor");
        let siderbarAvatar = document.getElementById("siderbarAvatar");
        let currentStyle = [];
        let currentWidth = sidebar.style.width;
        for(let i = 0; i < hiddenItems.length; i++) {
            currentStyle = [...currentStyle,hiddenItems[i].classList];
        }
        if(currentWidth === "280px") {
            sidebar.style.width = "76px";
            hiddenItems.forEach((item) => {
                item.classList.add("d-none");
            });
            menuIcons.forEach((icon) => {
                icon.classList.remove("pe-3");
            });
            infor.classList.add("mx-1");
        } else {
            for(let i = 0; i < hiddenItems.length; i++) {
                hiddenItems[i].classList.remove("d-none");
                currentStyle[i].forEach((cls) => {
                    hiddenItems[i].classList.add(cls);
                });
                // hiddenItems[i].classList.add(currentStyle[i]);
            }
            menuIcons.forEach((icon) => {
                icon.classList.add("pe-3");
            });
            infor.classList.remove("mx-1");
            sidebar.style.width = "280px";
        }
    }
</script>