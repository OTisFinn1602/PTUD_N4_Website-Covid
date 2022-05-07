<?php
session_start();
include_once "View/V_Global/head.php";
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

                    <!-- <li>
                        <a href="javascript: void(0);">
                            <i class="ti-light-bulb"></i>
                            <span> Quản lý </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="BenhVien.php?QLBN">Quản lý bệnh nhân</a></li>
                            <li><a href="BenhVien.php?QLBV">Quản lý bệnh viện</a></li>
                            <li><a href="BenhVien.php?QLTK">Quản lý tài khoản</a></li>
                        </ul>
                    </li> -->

                    <!-- <li>
                        <a href="BenhVien.php?YCCV">
                            <i class="ti-spray"></i>
                            <span> Yêu cầu chuyển viện </span>
                        </a>
                    </li> -->

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

                    <!-- <li>
                        <a href="charts.html">
                            <i class="ti-pie-chart"></i>
                            <span> Charts </span>
                            <span class="badge badge-primary float-right">5</span>
                        </a>
                    </li>

                    <li>
                        <a href="maps.html">
                            <i class="ti-location-pin"></i>
                            <span> Maps </span>
                        </a>
                    </li>

                    <li>
                        <a href="javascript: void(0);">
                            <i class="ti-files"></i>
                            <span> Pages </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="pages-login.html">Login</a></li>
                            <li><a href="pages-register.html">Register</a></li>
                            <li><a href="pages-forget-password.html">Forget Password</a></li>
                            <li><a href="pages-lock-screen.html">Lock-screen</a></li>
                            <li><a href="pages-blank.html">Blank page</a></li>
                            <li><a href="pages-404.html">Error 404</a></li>
                            <li><a href="pages-confirm-mail.html">Confirm Mail</a></li>
                            <li><a href="pages-session-expired.html">Session Expired</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);">
                            <i class="ti-widget"></i>
                            <span> Extra Pages </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">

                            <li><a href="extras-timeline.html">Timeline</a></li>
                            <li><a href="extras-invoice.html">Invoice</a></li>
                            <li><a href="extras-profile.html">Profile</a></li>
                            <li><a href="extras-calendar.html">Calendar</a></li>
                            <li><a href="extras-faqs.html">FAQs</a></li>
                            <li><a href="extras-pricing.html">Pricing</a></li>
                            <li><a href="extras-contacts.html">Contacts</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);">
                            <i class="ti-layout"></i>
                            <span> Layouts </span>
                            <span class="badge badge-danger badge-pill float-right">New</span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="layouts-horizontal.html">Horizontal</a></li>
                            <li><a href="layouts-dark-sidebar.html">Dark Sidebar</a></li>
                            <li><a href="layouts-small-sidebar.html">Small Sidebar</a></li>
                            <li><a href="layouts-sidebar-collapsed.html">Sidebar Collapsed</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);">
                            <i class="ti-share"></i>
                            <span> Multi Level </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level nav" aria-expanded="false">
                            <li>
                                <a href="javascript: void(0);">Level 1.1</a>
                            </li>
                            <li>
                                <a href="javascript: void(0);" aria-expanded="false">Level 1.2
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-third-level nav" aria-expanded="false">
                                    <li>
                                        <a href="javascript: void(0);">Level 2.1</a>
                                    </li>
                                    <li>
                                        <a href="javascript: void(0);">Level 2.2</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li> -->
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
                        include_once "View/V_Views/VTKBV.php";
                    } elseif (isset($_REQUEST['TKBN'])) {
                        include_once "View/V_Views/VTKBN.php";
                    } elseif (isset($_REQUEST['TTBN'])) {
                        include_once "View/V_Views/CapNhatSucKhoe.php";
                    } elseif (isset($_REQUEST['HTBN'])) {
                        include_once "View/V_Views/VHoTroBenhNhan.php";
						//Cập nhật tình trạng bệnh nhân
				    } elseif (isset($_REQUEST['CNSK'])) {
                        include_once "View/V_Views/vCNSK.php";
					} elseif (isset($_REQUEST['XLCNBN'])) {
                        include_once "View/V_Views/modules/xulyCNTTBN.php";
						//
                    } elseif (isset($_REQUEST['YCCV'])) {
                        include_once "View/V_Views/Xacnhanyccv.php";
                    } elseif (isset($_REQUEST['idBN'])) {
                        include_once "View/V_Views/vTuVan.php";
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
    <!-- END wrapper -->


    <!-- Right Sidebar -->
    <!-- <div class="right-bar">
<div class="rightbar-title">
    <a href="javascript:void(0);" class="right-bar-toggle float-right">
        <i class="mdi mdi-close"></i>
    </a>
    <h5 class="font-16 m-0 text-white">Theme Customizer</h5>
</div>
<div class="slimscroll-menu">

    <div class="p-4">
        <div class="alert alert-warning" role="alert">
            <strong>Customize </strong> the overall color scheme, layout, etc.
        </div>
        <div class="mb-2">
            <img src="assets\images\layouts\light.png" class="img-fluid img-thumbnail" alt="">
        </div>
        <div class="custom-control custom-switch mb-3">
            <input type="checkbox" class="custom-control-input theme-choice" id="light-mode-switch" checked="">
            <label class="custom-control-label" for="light-mode-switch">Light Mode</label>
        </div>

        <div class="mb-2">
            <img src="assets\images\layouts\dark.png" class="img-fluid img-thumbnail" alt="">
        </div>
        <div class="custom-control custom-switch mb-3">
            <input type="checkbox" class="custom-control-input theme-choice" id="dark-mode-switch" data-bsstyle="assets/css/bootstrap-dark.min.css" data-appstyle="assets/css/app-dark.min.css">
            <label class="custom-control-label" for="dark-mode-switch">Dark Mode</label>
        </div>

        <div class="mb-2">
            <img src="assets\images\layouts\rtl.png" class="img-fluid img-thumbnail" alt="">
        </div>
        <div class="custom-control custom-switch mb-5">
            <input type="checkbox" class="custom-control-input theme-choice" id="rtl-mode-switch" data-appstyle="assets/css/app-rtl.min.css">
            <label class="custom-control-label" for="rtl-mode-switch">RTL Mode</label>
        </div>

        <a href="https://1.envato.market/EK71X" class="btn btn-danger btn-block mt-3" target="_blank"><i class="mdi mdi-download mr-1"></i> Download Now</a>
    </div>
</div>  -->
    <!-- end slimscroll-menu-->
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <!-- <div class="rightbar-overlay"></div>

<a href="javascript:void(0);" class="right-bar-toggle demos-show-btn">
<i class="mdi mdi-settings-outline mdi-spin"></i> &nbsp;Choose Demos
</a> -->


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