<link rel="stylesheet" href="componants/header/header.css">

<!-- <header> -->
<nav>
    <div class="navbar">
        <i class='bx bx-menu'></i>
        <div class="logo"><a href="#">GOsP</a></div>
        <div class="nav-links">
            <div class="sidebar-logo">
                <span class="logo-name">GOsP</span>
                <i class='bx bx-x'></i>
            </div>
            <ul class="links">
                <li><a href="#">HOME</a></li>
                <li><a href="#">ABOUT</a></li>
                <li><a href="project.html">PROJECT</a></li>
                <li><a href="FAQ.html">FAQ</a></li>
                <li><a href="#">CONTACT</a></li>
                <li>
                    <a href="#">LOGIN</a>
                    <i class='bx bxs-chevron-down js-arrow arrow '></i>
                    <ul class="js-sub-menu sub-menu">
                        <li><a href="#">STUDENT</a></li>
                        <li><a href="#">ADMIN</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- </header> -->


<script>
    // search-box open close js code
    let navbar = document.querySelector(".navbar");


    // sidebar open close js code
    let navLinks = document.querySelector(".nav-links");
    let menuOpenBtn = document.querySelector(".navbar .bx-menu");
    let menuCloseBtn = document.querySelector(".nav-links .bx-x");
    menuOpenBtn.onclick = function () {
        navLinks.style.left = "0";
    }
    menuCloseBtn.onclick = function () {
        navLinks.style.left = "-100%";
    }


    // sidebar submenu open close js code
    let htmlcssArrow = document.querySelector(".htmlcss-arrow");
    htmlcssArrow.onclick = function () {
        navLinks.classList.toggle("show1");
    }
    let moreArrow = document.querySelector(".more-arrow");
    moreArrow.onclick = function () {
        navLinks.classList.toggle("show2");
    }
    let jsArrow = document.querySelector(".js-arrow");
    jsArrow.onclick = function () {
        navLinks.classList.toggle("show3");
    }
</script>