<style>
    .dropbtn {
        cursor: pointer;
    }

    .dropbtn:hover,
    .dropbtn:focus {
        width: 50px;
        height: 50px;
    }

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        right: 0;
        background-color: #f1f1f1;
        min-width: 160px;
        border-radius: 5px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .show {
        display: block;
    }

    .dropdown-content a:hover {
        background-color: #ddd;
        color: red;
        border-radius: 5px;
    }
</style>
<header style="position: fixed; z-index: 99999; top: 0; right: 0; left: 0;">
    <nav class="navbar navbar-expand-md navbar-light bg-secondary sticky-top">
        <div class="container-fluid">
            <a href="index.php" class="navbar-brand">
                <img src="./images/logo-19-removebg-preview.png" alt="Logo" width="170" height="70">
            </a>
            <?php
            if (!isset($_REQUEST['Login']) || $_SESSION['chucvu'] == 0) {
                echo '<div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a href="index.php" class="nav-link text-white">Trang chủ</a>
                            </li>';
                if ($_SESSION['chucvu'] == 1) {
                    echo '<li class="nav-item">
                                    <a href="admin.php" class="nav-link text-white">Admin</a>
                                </li>
                                <li class="nav-item">
                                    <a href="BenhVien.php" class="nav-link text-white">Bệnh Viện</a>
                                </li>';
                } elseif ($_SESSION['chucvu'] == 2) {
                    echo '<li class="nav-item">
                                    <a href="BenhVien.php" class="nav-link text-white">Bệnh Viện</a>
                                </li>';
                }
                echo '</ul>
                    </div>';
                if ($_SESSION['dntc'] == true) {
                    $pageChangePass = 'index.php?changepass';
                    $Logout = '<a href="index.php?Logout" class="nav-item nav-link">Đăng xuất</a>';
                    if ($_SESSION['chucvu'] == 1) { ?>
                        <div class="dropdown">
                            <img src="images/imgavatar.jpg" onclick="myFunction()" class="ml-4 dropbtn avatar-md rounded-circle">
                            <div id="myDropdown" class="dropdown-content">
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome Admin!</h6>
                                </div>
                                <!-- <a href="#">Thông tin cá nhân</a> -->
                                <a href="<?php echo $pageChangePass ?>">Đổi mật khẩu</a>
                                <?php echo $Logout ?>
                            </div>
                        </div>
                    <?php } elseif ($_SESSION['chucvu'] == 2) { ?>
                        <div class="dropdown">
                            <img src="images/logoBV.png" onclick="myFunction()" class="ml-4 dropbtn avatar-md rounded-circle">
                            <div id="myDropdown" class="dropdown-content">
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome Bệnh viện!</h6>
                                </div>
                                <!-- <a href="#">Thông tin cá nhân</a> -->
                                <a href="<?php echo $pageChangePass ?>">Đổi mật khẩu</a>
                                <?php echo $Logout ?>
                            </div>
                        </div>
                    <?php } else { ?>
                        <div class="dropdown">
                            <img src="images/user-logo.png" onclick="myFunction()" class="ml-4 dropbtn avatar-md rounded-circle">';
                            <div id="myDropdown" class="dropdown-content">
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome Bệnh nhân!</h6>
                                </div>
                                <!-- <a href="#">Thông tin cá nhân</a> -->
                                <a href="<?php echo $pageChangePass ?>">Đổi mật khẩu</a>
                                <?php echo $Logout ?>
                            </div>
                        </div>
            <?php  }
                } else {
                    echo '<a href="index.php?Login" class="nav-item nav-link text-white">Đăng nhập</a>';
                }
                if (isset($_REQUEST['Logout'])) {
                    unset($_SESSION['dntc']);
                    unset($_SESSION['loss']);
                    unset($_SESSION['chucvu']);
                    unset($_SESSION['tenTK']);
                    echo '<script>alert("Đăng xuất thành công!");</script>';
                    echo header("refresh:0; url='index.php'");
                }
            }
            ?>


        </div>
    </nav>
</header>
<script src="./Js/onclick.js"></script>