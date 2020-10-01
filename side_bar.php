<link rel="stylesheet " href="<?php echo $css . "side_bar.css" ?>">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">

<input type="checkbox" id="check" />
        <header>
            <div class="container-fluid">
                <div class="left_area">
                    <h3>
                        <span class="nav_btn">
                            <label>
                                <div id="sidebar_btn" class="d-none d-md-block">
                                    <label for="check"><i class="fa fa-bars"></i></label>
                                </div>
                                <span id="navbar_btn" class="d-block d-md-none" data-toggle="collapse" data-target="#navbar">
                                    <i class="fa fa-bars"></i>
                                </span>
                            </label>
                        </span>
                        webX <span>Shop</span>
                    </h3>
                </div>
                <div class="d-flex justify-content-end">
                    <button class="btn btn-primary btn-sm dropdown-toggle mr-4 my-0 font-weight-bold px-3 py-2 menu" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user"></i>
                        <span class="mx-1"><?php echo $_SESSION['username'] . " ❯❯" ?></span>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="members.php?do=Edit&id=<?php echo $_SESSION['id']; ?>">Edit Profile</a>
                        <a class="dropdown-item" href="#">Settings</a>
                        <a class="dropdown-item" href="logout.php">Logout</a>
                    </div>
                </div>
            </div>
        </header>
        <!--header area end-->
        <!--mobile navigation bar start-->
        <div class="mobile_nav bg-dark text-white navbar-collapse pb-2" id="navbar">
            <div class="mobile_nav_items mb-2">
                <div class="nav_bar text-center">
                    <img src="img/me.webp" class="mobile_profile_image" alt="" />
                    <h4>Amr</h4>
                </div>
                <a href="dash.php"><i class="fas fa-desktop"></i> <span> Dashboard </span></a>
                <a href="#"><i class="fas fa-cogs"></i> <span> Components </span></a>
                <a href="#"><i class="fas fa-table"></i> <span> Tables </span></a>
                <a href="#"><i class="fas fa-th"></i> <span> Forms </span></a>
                <a href="#"><i class="fas fa-info-circle"></i> <span> About </span></a>
                <a href="#"><i class="fas fa-sliders-h"></i> <span> Settings </span></a>
            </div>
        </div>
        <!--mobile navigation bar end-->
        <!--sidebar start-->
        <div class="sidebar">
            <div class="profile_info">
                <img src="img/me.webp" class="profile_image mb-1" alt="" />
                <h4><?php echo  $_SESSION['username'] . " ❯❯" ?></h4>
            </div>
            <a href="dash.php"><i class="fas fa-desktop"></i> <span> Dashboard </span></a>
            <a href="#"><i class="fas fa-cogs"></i> <span> Components </span></a>
            <a href="#"><i class="fas fa-table"></i> <span> Tables </span></a>
            <a href="#"><i class="fas fa-th"></i> <span> Forms </span></a>
            <a href="#"><i class="fas fa-info-circle"></i> <span> About </span></a>
            <a href="#"><i class="fas fa-sliders-h"></i> <span> Settings </span></a>
        </div>

        <script>
          
$(document).ready(function () {
    /*------------------------------
    sidebar
    --------------------------------*/
    $(".nav_btn").click(function () {
        $(".mobile_nav_items").toggleClass("active");
    });
    $("#check").click(function () {
        setTimeout(function () {
            let sidebarWidth = $(".sidebar").css("width");
            let sidebarLeft = $(".sidebar").css("left");
            if (sidebarWidth + sidebarLeft === "250px-185px") {
                $("main").css("margin-left", 70);
            } else {
                $("main").css("margin-left", sidebarWidth);
            }
        }, 600);
    });
    $("#navbar_btn").click(function () {
        $(window).scrollTop("0");
    });
    $(window).resize(function () {
        window.location.reload();
    });

    /*---------------------------------
    Animations
    -----------------------------------*/
});
        </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
