<?php
session_start();
include_once "View/V_Global/head.php";
if($_SESSION['dntc'] == true){
?>

<body>
    <!-- Begin page -->
    <div id="wrapper">


        <!-- Topbar Start -->
        <div class="navbar-custom">
            <ul class="list-unstyled topnav-menu float-right mb-0">

                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <i class="mdi mdi-bell noti-icon"></i>
                        <span class="badge badge-danger rounded-circle noti-icon-badge">4</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                        <!-- item-->
                        <div class="dropdown-item noti-title">
                            <h5 class="font-16 m-0">
                                <span class="float-right">
                                    <a href="" class="text-dark">
                                        <small>Clear All</small>
                                    </a>
                                </span>Notification
                            </h5>
                        </div>

                        <div class="slimscroll noti-scroll">

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-success"><i class="mdi mdi-comment-account-outline"></i></div>
                                <p class="notify-details">Caleb Flakelar commented on Admin<small class="text-muted">1 min ago</small></p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-info"><i class="mdi mdi-account-plus"></i></div>
                                <p class="notify-details">New user registered.<small class="text-muted">5 hours ago</small></p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-danger"><i class="mdi mdi-heart"></i></div>
                                <p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">3 days ago</small></p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-warning"><i class="mdi mdi-comment-account-outline"></i></div>
                                <p class="notify-details">Caleb Flakelar commented on Admin<small class="text-muted">4 days ago</small></p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-primary">
                                    <i class="mdi mdi-heart"></i>
                                </div>
                                <p class="notify-details">Carlos Crouch liked <b>Admin</b>
                                    <small class="text-muted">13 days ago</small>
                                </p>
                            </a>
                        </div>

                        <!-- All-->
                        <!-- <a href="javascript:void(0);" class="dropdown-item text-primary text-center notify-item notify-all ">
                            View all
                            <i class="fi-arrow-right"></i>
                        </a> -->

                    </div>
                </li>

                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle nav-user mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <img src="images/imgavatar.jpg" alt="user-image" class="rounded-circle">
                        <span class="pro-user-name ml-1">
                            Tiến Cường
                            <!-- <i class="mdi mdi-chevron-down"></i> -->
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                        <!-- item-->
                        <div class="dropdown-header noti-title">
                            <h6 class="text-overflow m-0">Welcome !</h6>
                        </div>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="mdi mdi-account-outline"></i>
                            <span>Profile</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="mdi mdi-settings-outline"></i>
                            <span>Settings</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="mdi mdi-lock-outline"></i>
                            <span>Lock Screen</span>
                        </a>

                        <div class="dropdown-divider"></div>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="mdi mdi-logout-variant"></i>
                            <span>Logout</span>
                        </a>

                    </div>
                </li>

                <li class="dropdown notification-list">
                    <a href="javascript:void(0);" class="nav-link right-bar-toggle">
                        <i class="mdi mdi-settings-outline noti-icon"></i>
                    </a>
                </li>


            </ul>

            <!-- LOGO -->
            <div class="logo-box">
                <a href="index.php" class="logo text-center logo-dark">
                    <span class="logo-lg">
                        <img src="images/logo-19-removebg-preview.png" alt="" height="60">
                        <!-- <span class="logo-lg-text-dark">Simple</span> -->
                    </span>
                    <span class="logo-sm">
                        <!-- <span class="logo-lg-text-dark">S</span> -->
                        <!-- <img src="images\logo-sm.png" alt="" height="22"> -->
                    </span>
                </a>

                <a href="index.php" class="logo text-center logo-light">
                    <span class="logo-lg">
                        <!-- <img src="images\logo-light.png" alt="" height="26"> -->
                        <!-- <span class="logo-lg-text-light">Simple</span> -->
                    </span>
                    <span class="logo-sm">
                        <!-- <span class="logo-lg-text-light">S</span> -->
                        <!-- <img src="images\logo-sm.png" alt="" height="22"> -->
                    </span>
                </a>
            </div>

            <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                <li>
                    <button class="button-menu-mobile">
                        <i class="mdi mdi-menu"></i>
                    </button>
                </li>

                <li class="d-none d-sm-block">
                    <form class="app-search">
                        <div class="app-search-box">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search...">
                                <div class="input-group-append">
                                    <button class="btn" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </li>
            </ul>
        </div>
        <!-- end Topbar -->
        <!-- ========== Left Sidebar Start ========== -->
        <div class="left-side-menu">


            <div class="user-box">
                <div class="float-left">
                    <img src="images/imgavatar.jpg" alt="" class="avatar-md rounded-circle">
                </div>
                <div class="user-info">
                    <a href="#">Tiến Cường</a>
                    <p class="text-muted m-0">Bệnh Viện</p>
                </div>
            </div>

            <!--- Sidemenu -->
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
                            <span class="badge badge-primary float-right">11</span>
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
            <!-- End Sidebar -->

            <div class="clearfix"></div>


        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                <!-- Start container-fluid -->
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
                <!-- end container-fluid -->



                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                2017 - 2020 &copy; Simple theme by <a href="">Coderthemes</a>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>
            <!-- end content -->

        </div>
        <!-- END content-page -->

    </div>

</body>
<script src="./Js/jquery-3.6.0.min.js"></script>
<script src="./css/bootstrap-4.0.0/assets/js/vendor/popper.min.js"></script>
<script src="./css/bootstrap-4.0.0/dist/js/bootstrap.min.js"></script>
<!--  -->
<!-- Vendor js -->
<script src="./css/assets/js/vendor.min.js"></script>

<script src="./css/assets/libs/morris-js/morris.min.js"></script>
<script src="./css/assets/libs/raphael/raphael.min.js"></script>

<script src="./css/assets/js/pages/dashboard.init.js"></script>

<!-- App js -->
<script src="./css/assets/js/app.min.js"></script>

</html>
<?php
}else{
    include_once"View/V_Views/VDangNhap.php";
}
?>