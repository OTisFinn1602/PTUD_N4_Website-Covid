<?php
session_start();
include_once "View/V_Global/head.php";
include_once "View/V_Views/modules/comfig.php";
?>
<style>
    body {
        margin-top: 100px;
    }
</style>

<body>
    <?php
    include_once "View/V_Global/header.php";
    ?>
    <?php
    if (isset($_REQUEST['Login'])) {
        include_once "View/V_Views/VDangNhap.php";
    } elseif (isset($_REQUEST['KBYT'])) {
        include_once "View/V_Views/VKhaiBaoYTe.php";
    } elseif (isset($_REQUEST['TKBN'])) {
        include_once "View/V_Views/VTKBN.php";
    } elseif (isset($_REQUEST['TKBV'])) {
        include_once "View/V_Views/VTKBV.php";
    } elseif (isset($_REQUEST['UpTK'])) {
        include_once "View/V_Views/CapnhatTK.php";
    } elseif (isset($_REQUEST['YCCV'])) {
        include_once "View/V_Views/Xacnhanyccv.php";
    } elseif (isset($_REQUEST['YCTV'])) {
        include_once "View/V_Views/VYeucauTV.php";
    } elseif (isset($_REQUEST['search'])) {
        include_once "View/V_Views/vTimKiem.php";
    } elseif (isset($_REQUEST['HTKBYT'])) {
        include_once "View/V_Views/modules/xuly.php";
    } else {
        include_once "View/V_Views/VTrangChu.php";
    }
    ?>
    <?php
    if (!isset($_REQUEST['search'])) {
        include_once "View/V_Global/footer.php";
    }
    ?>
</body>
<script src="./Js/jquery-3.6.0.min.js"></script>
<script src="./css/bootstrap-4.0.0/assets/js/vendor/popper.min.js"></script>
<script src="./css/bootstrap-4.0.0/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="./Js/KBYT.js"></script>
<script type="text/javascript" src="./Js/KBYT_NCT.js"></script>
<!-- Vendor js -->
<script src="./css/assets/js/vendor.min.js"></script>

<script src="./css/assets/libs/morris-js/morris.min.js"></script>
<script src="./css/assets/libs/raphael/raphael.min.js"></script>

<script src="./css/assets/js/pages/dashboard.init.js"></script>

<!-- App js -->
<script src="./css/assets/js/app.min.js"></script>

</html>