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
    if ($_SESSION['dntc'] == true) {
        if (isset($_REQUEST['YCCV'])) {
            include_once "View/V_Views/VYeucaucv.php";
        } elseif (isset($_REQUEST['reply'])) {
            include_once "View/V_Views/vTuVan.php";
        } elseif (isset($_REQUEST['KBYT'])) {
            include_once "View/V_Views/VKhaiBaoYTe.php";
        } elseif (isset($_REQUEST['HTKBYT'])) {
            include_once "View/V_Views/modules/xuly.php";
        } elseif (isset($_REQUEST['TKBNTT'])) {
            include_once "View/V_Views/VTKBNTT.php";
        } elseif (isset($_REQUEST['HTTKBN'])) {
            include_once "View/V_Views/modules/xulyTKBN.php";
        } elseif (isset($_REQUEST['HTCTTKTT'])) {
            include_once "View/V_Views/modules/xulyHTCTTKTT.php";
        } elseif (isset($_REQUEST['HTCTTKBN'])) {
            include_once "View/V_Views/modules/xulyHTCTTK.php";
        } elseif (isset($_REQUEST['TKBVTT'])) {
            include_once "View/V_Views/VTKBVTT.php";
        } elseif (isset($_REQUEST['HTTKBV'])) {
            include_once "View/V_Views/modules/xulyTKBV.php";
        } elseif (isset($_REQUEST['HTCTTKBV'])) {
            include_once "View/V_Views/modules/xulyHTCTTKBVTT.php";
        } elseif (isset($_REQUEST['search'])) {
            include_once "View/V_Views/vTimKiem.php";
        } elseif (isset($_REQUEST['changepass'])) {
            include_once "View/V_Views/VChangePassword.php";
        } else {
            include_once "View/V_Views/VTrangChu.php";
        }
    } else {
        if (isset($_REQUEST['YCCV'])) {
            include_once "View/V_Views/VDangNhap.php";
        } elseif (isset($_REQUEST['reply'])) {
            include_once "View/V_Views/VDangNhap.php";
        } elseif (isset($_REQUEST['KBYT'])) {
            include_once "View/V_Views/VKhaiBaoYTe.php";
        } elseif (isset($_REQUEST['HTKBYT'])) {
            include_once "View/V_Views/modules/xuly.php";
        } elseif (isset($_REQUEST['Login'])) {
            include_once "View/V_Views/VDangNhap.php";
        } elseif (isset($_REQUEST['TKBNTT'])) {
            include_once "View/V_Views/VTKBNTT.php";
        } elseif (isset($_REQUEST['HTTKBN'])) {
            include_once "View/V_Views/modules/xulyTKBN.php";
        } elseif (isset($_REQUEST['HTCTTKTT'])) {
            include_once "View/V_Views/modules/xulyHTCTTKTT.php";
        } elseif (isset($_REQUEST['HTCTTKBN'])) {
            include_once "View/V_Views/modules/xulyHTCTTK.php";
        } elseif (isset($_REQUEST['TKBVTT'])) {
            include_once "View/V_Views/VTKBVTT.php";
        } elseif (isset($_REQUEST['HTTKBV'])) {
            include_once "View/V_Views/modules/xulyTKBV.php";
        } elseif (isset($_REQUEST['HTCTTKBV'])) {
            include_once "View/V_Views/modules/xulyHTCTTKBVTT.php";
        } elseif (isset($_REQUEST['search'])) {
            include_once "View/V_Views/vTimKiem.php";
        } else {
            include_once "View/V_Views/VTrangChu.php";
        }
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
<script src="./css/assets/js/vendor.min.js"></script>
<script type="text/javascript" src="./Js/onclick.js"></script>

<script src="./css/assets/libs/morris-js/morris.min.js"></script>
<script src="./css/assets/libs/raphael/raphael.min.js"></script>

<script src="./css/assets/js/pages/dashboard.init.js"></script>

<!-- App js -->
<script src="./css/assets/js/app.min.js"></script>

</html>