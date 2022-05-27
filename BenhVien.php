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
                        <span class="logo-sm">
                            <img src="images/logo-19-removebg-preview.png" alt="" height="60">
                        </span>
                    </a>
                </div>
            </div>
            <!-- left menu -->
            <div class="left-side-menu">

                <div class="user-box">
                    <div class="float-left">
                        <?php if ($_SESSION['chucvu'] == 1) { ?>
                            <img src="images/imgavatar.jpg" alt="" class="avatar-md rounded-circle">
                        <?php } elseif ($_SESSION['chucvu'] == 2) { ?>
                            <img src="images/logoBV.png" alt="" class="avatar-md rounded-circle">
                        <?php } ?>
                    </div>
                    <div class="user-info">
                        <a href="#"><?php echo $myname ?></a>
                        <p class="text-muted m-0">Bệnh Viện</p>
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
                            <a href="BenhVien.php">
                                <i class="ti-home"></i>
                                <span> Home Bệnh Viện </span>
                            </a>
                        </li>

                        <li>
                            <a href="BenhVien.php?TTBN">
                                <i class="ti-paint-bucket"></i>
                                <span> Tình trạng bệnh nhân </span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript: void(0);">
                                <i class="ti-pencil-alt"></i>
                                <span> Tìm kiếm </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="BenhVien.php?TKBN">Tìm kiếm bệnh nhân</a></li>
                                <li><a href="BenhVien.php?TKBV">Tìm kiếm bệnh viện</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);">
                                <i class="ti-menu-alt"></i>
                                <span> Hỗ trợ bệnh nhân </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="BenhVien.php?HTBN">Tư vấn</a></li>
                                <li><a href="BenhVien.php?YCCV">Yêu cầu chuyển viện</a></li>
                            </ul>
                        </li>
                    </ul>

                </div>
                <div class="clearfix"></div>


            </div>
            <!-- page main -->
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
                            include_once "View/V_Views/VTKBVBV.php";
                        } elseif (isset($_REQUEST['TKBN'])) {
                            include_once "View/V_Views/VTKBNBV.php";
                        } elseif (isset($_REQUEST['TTBN'])) {
                            include_once "View/V_Views/CapNhatSucKhoe.php";
                        } elseif (isset($_REQUEST['HTBN'])) {
                            include_once "View/V_Views/VHoTroBenhNhan.php";
                        } elseif (isset($_REQUEST['HTTKBN'])) {
                            include_once "View/V_Views/modules/xulyTKBN.php";
                        } elseif (isset($_REQUEST['HTTKBV'])) {
                            include_once "View/V_Views/modules/xulyTKBV.php";
                        } elseif (isset($_REQUEST['HTCTTK'])) {
                            include_once "View/V_Views/modules/xulyHTCTTK.php";
                        } elseif (isset($_REQUEST['HTCTTKBV'])) {
                            include_once "View/V_Views/modules/xulyHTCTTKBVTT.php";
                            //Cập nhật tình trạng bệnh nhân
                        } elseif (isset($_REQUEST['CNSK'])) {
                            include_once "View/V_Views/vCNSK.php";
                        } elseif (isset($_REQUEST['XLCNBN'])) {
                            include_once "View/V_Views/modules/xulyCNTTBN.php";
                            //
                        } elseif (isset($_REQUEST['YCCV'])) {
                            include_once "View/V_Views/Xacnhanyccv.php";
                        } elseif (isset($_REQUEST['CTYCCV'])) {
                            include_once "View/V_Views/VCTYCCV.php";
                        } elseif (isset($_REQUEST['reply'])) {
                            include_once "View/V_Views/vTuVan.php";
                        } elseif (isset($_REQUEST['del'])) {
                            include_once "View/V_Views/vDelNDTV.php";
                        } else {
                            include_once "View/V_Views/vBenhVien.php";
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

    </html>
<?php
} else {
    include_once "View/V_Views/VDangNhap.php";
}
?>