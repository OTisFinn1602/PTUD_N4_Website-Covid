<?php
session_start();
include_once "View/V_Global/head.php";
if ($_SESSION['dntc'] == true) {
    $myname = $_SESSION['tenTK'];
?>

    <body>
        <div id="wrapper">
            <div class="navbar-custom">
                <ul class="list-unstyled topnav-menu float-right mb-0">
                    <li class="notification-list">
                        <a class="nav-link nav-user mr-0">
                            <?php if ($_SESSION['chucvu'] == 1) { ?>
                                <img src="images/imgavatar.jpg" alt="" class="rounded-circle">
                            <?php } elseif ($_SESSION['chucvu'] == 2) { ?>
                                <img src="images/logoBV.png" alt="" class="rounded-circle">
                            <?php } ?>
                            <span class="ml-1">
                                <?php echo $myname ?>
                                <i class="fas fa-caret-down"></i>
                            </span>
                        </a>
                    </li>
                </ul>

                <div class="logo-box">
                    <a href="index.php" class="logo text-center logo-dark">
                        <span class="logo-lg">
                            <img src="images/logo-19-removebg-preview.png" alt="" height="60">
                        </span>
                    </a>

                    <a href="index.php" class="logo text-center logo-light">
                    </a>
                </div>


            </div>
            <div class="left-side-menu">

                <div class="user-box">
                    <div class="float-left">
                        <img src="images/imgavatar.jpg" alt="" class="avatar-md rounded-circle">
                    </div>
                    <div class="user-info">
                        <a href="#"><?php echo $myname ?></a>
                        <p class="text-muted m-0">Administrator</p>
                    </div>
                </div>
                <div id="sidebar-menu">

                    <ul class="metismenu" id="side-menu">

                        <li>
                            <a href="index.php">
                                <i class="ti-home"></i>
                                <span> Trang chủ </span>
                            </a>
                        </li>

                        <li class="menu-title">Navigation</li>

                        <li>
                            <a href="admin.php">
                                <i class="ti-home"></i>
                                <span> Home Admin </span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript: void(0);">
                                <i class="ti-light-bulb"></i>
                                <span> Quản lý </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="admin.php?QLBN">Quản lý bệnh nhân</a></li>
                                <li><a href="admin.php?QLBV">Quản lý bệnh viện</a></li>
                                <li><a href="admin.php?QLTK">Quản lý tài khoản</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);">
                                <i class="ti-pencil-alt"></i>
                                <span> Tìm kiếm </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="admin.php?TKBN">Tìm kiếm bệnh nhân</a></li>
                                <li><a href="admin.php?TKBV">Tìm kiếm bệnh viện</a></li>
                            </ul>
                        </li>
                    </ul>

                </div>
                <div class="clearfix"></div>
            </div>
            <div class="content-page">
                <div class="content">
                    <div class="container-fluid">
                        <?php
                        if (isset($_REQUEST['QLBN'])) {
                            include_once "View/V_Views/VQuanlyBN.php";
                        } elseif (isset($_REQUEST['QLBV'])) {
                            include_once "View/V_Views/VQuanlyBV.php";
                        } elseif (isset($_REQUEST['QLTK'])) {
                            include_once "View/V_Views/ListTK.php";
                        } elseif (isset($_REQUEST['TKBV'])) {
                            include_once "View/V_Views/VTKBV.php";
                        } elseif (isset($_REQUEST['HTTKBN'])) {
                            include_once "View/V_Views/modules/xulyTKBN.php";
                        } elseif (isset($_REQUEST['HTCTTK'])) {
                            include_once "View/V_Views/modules/xulyHTCTTK.php";
                        } elseif (isset($_REQUEST['HTTKBV'])) {
                            include_once "View/V_Views/modules/xulyTKBV.php";
                        } elseif (isset($_REQUEST['HTCTTKBV'])) {
                            include_once "View/V_Views/modules/xulyHTCTTKBV.php";
                        } elseif (isset($_REQUEST['TKBN'])) {
                            include_once "View/V_Views/VTKBN.php";
                        } elseif (isset($_REQUEST['CNTK'])) {
                            include_once "View/V_Views/CapnhatTK.php";
                        } elseif (isset($_REQUEST['XNYCCV'])) {
                            include_once "View/V_Views/XacnhanCV.php";
                        } elseif (isset($_REQUEST['ListTK'])) {
                            include_once "View/V_Views/ListTK.php";
                        } elseif (isset($_REQUEST['VQuanlyBV'])) {
                            include_once "View/V_Views/VQuanlyBV.php";
                        } elseif (isset($_REQUEST['AddTK'])) {
                            include_once "View/V_Views/TaiKhoanAdd.php";
                        } elseif (isset($_REQUEST['AddBV'])) {
                            include_once "View/V_Views/BenhVienAdd.php";
                        } elseif (isset($_REQUEST['CNBV'])) {
                            include_once "View/V_Views/CapnhatBV.php";
                        } elseif (isset($_REQUEST['CNBN'])) {
                            include_once "View/V_Views/CapnhatBN.php";
                        } else {
                            include_once "View/V_Views/vAdmin.php";
                        }
                        ?>

                    </div>
                    <footer class="footer">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    Groupfour
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
        </div>


    </body>
    <script src="./Js/jquery-3.6.0.min.js"></script>
    <script src="./css/bootstrap-4.0.0/assets/js/vendor/popper.min.js"></script>
    <script src="./css/bootstrap-4.0.0/dist/js/bootstrap.min.js"></script>
    <script src="./css/assets/js/vendor.min.js"></script>
    
    <script src="./css/assets/libs/morris-js/morris.min.js"></script>
    <script src="./css/assets/libs/raphael/raphael.min.js"></script>
    
    <script src="./css/assets/js/pages/dashboard.init.js"></script>
    <script src="./css/assets/js/app.min.js"></script>
    <script src="./Js/KBYT_NCT.js"></script>

    </html>
<?php
} else {
    include_once "View/V_Views/VDangNhap.php";
}
?>