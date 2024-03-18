<?php
    $sideBarList = array(
        "scan" => "fa-regular fa-file-image",
        "history" => "fa-regular fa-square-check",
        "about us" => "fa-solid fa-circle-info"
    );
    $uri = $_SERVER['REQUEST_URI'];
    $uri = trim($uri, "/");
?>
<style>
    .dropdown-toggle::after {
        content: none;
    }
</style>
<div id="sidebar" class="d-flex flex-column p-3 flex-shrink-0 text-bg-dark h-100 " style="width: 280px;">
    <a href="/" class="d-flex align-text-center text-white text-decoration-none text-center" style="min-height: 30px;">
        <i class="fa-solid fa-bars d-flex align-items-center justify-content-center px-3" onclick=closeSideBar()></i>
        <span class="fs-5 fw-bold hiddenItem">Degree Scanner</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <?php
            foreach($sideBarList as $name => $icon) {
                $temp = explode(" ", $name);
                $state = $temp[0] === $uri ? "active" : "";
                echo '<li class="nav-item"><a href="/'.$temp[0].'/" class="nav-link text-white side-bar '.$state.'" style="cursor: pointer;" aria-current="page"><i class="'.$icon.' pe-3 menuIcon"></i><span class="hiddenItem" style="text-transform: uppercase;">'.$name.'</span></a></li>';
            }
        ?>
    </ul>
    <hr>
    <div class="dropdown">
        <a href="#" class="d-flex text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" onclick=changeDropdownIcon()>
            <img id="siderbarAvatar" src="<?php echo base_url("img/con_meo.jpg")?>" class="rounded-circle object-fit-cover" width="32" height="32" style="margin: 0px 6px;">
            <span class="fs-6 text-center hiddenItem" style="display:flex;align-items:center;">Thanh An</span>
            <i id="dropdown-icon" class="fa-solid fa-angle-down ms-2 mt-1 hiddenItem" style="display:flex;align-items:center;"></i>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
            <li><a href="#" class="dropdown-item">Profile</a></li>
            <li><a href="#" class="dropdown-item">Settings</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a href="#" class="dropdown-item">Log Out</a></li>
        </ul>
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
        let siderbarAvatar = document.getElementById("siderbarAvatar");
        let currentStyle = [];
        let currentWidth = sidebar.style.width;
        for(let i = 0; i < hiddenItems.length; i++) {
            currentStyle = [...hiddenItems[i].style,currentStyle];
        }
        if(currentWidth === "280px") {
            sidebar.style.width = "76px";
            hiddenItems.forEach((item) => {
                item.style.display = "none";
            });
            menuIcons.forEach((icon) => {
                icon.classList.remove("pe-3");
            });
        } else {
            for(let i = 0; i < hiddenItems.length; i++) {
                hiddenItems[i].style = currentStyle[i];
            }
            menuIcons.forEach((icon) => {
                icon.classList.add("pe-3");
            });
            sidebar.style.width = "280px";
        }
        // console.log(sidebar);
    }
</script>