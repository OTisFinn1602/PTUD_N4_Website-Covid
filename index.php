<?php
session_start();
include_once "View/V_Global/head.php";
?>

<body>
    <?php
        include_once "View/V_Global/header.php";
    ?>
    <?php
    if (isset($_REQUEST['Login'])) {
        include_once "View/V_Views/VDangNhap.php";
    } elseif (isset($_REQUEST['KBYT'])) {
        include_once "View/V_Views/VKhaiBaoYTe.php";
    } elseif (isset($_REQUEST['spBN'])) {
        include_once "View/V_Views/VHoTroBenhNhan.php";
    } elseif (isset($_REQUEST['TKBN'])) {
        include_once "View/V_Views/VTKBN.php";
    } elseif (isset($_REQUEST['TKBV'])) {
        include_once "View/V_Views/VTKBV.php";
    } elseif (isset($_REQUEST['AdminLogin'])) {
        include_once "View/V_Views/adminlogin.php";
    } elseif (isset($_REQUEST['UpSucKhoe'])) {
        include_once "View/V_Views/CapNhatSucKhoe.php";
    } elseif (isset($_REQUEST['UpTK'])) {
        include_once "View/V_Views/CapnhatTK.php";
    } elseif (isset($_REQUEST['ListTK'])) {
        include_once "View/V_Views/ListTK.php";
    } elseif (isset($_REQUEST['AddTK'])) {
        include_once "View/V_Views/TaiKhoanAdd.php";
    } elseif (isset($_REQUEST['QLBN'])) {
        include_once "View/V_Views/VQuanlyBN.php";
    } elseif (isset($_REQUEST['QLBV'])) {
        include_once "View/V_Views/VQuanlyBV.php";
    } elseif (isset($_REQUEST['YCTV'])) {
        include_once "View/V_Views/VYeucauTV.php";
    } elseif (isset($_REQUEST['XNYC'])) {
        include_once "View/V_Views/Xacnhanyccv.php";
    } 
    else {
        include_once "View/V_Views/VTrangChu.php";
    }
    ?>
    <?php
    include_once "View/V_Global/footer.php";
    ?>
</body>
<script src="./Js/jquery-3.6.0.min.js"></script>
<script src="./css/bootstrap-4.0.0/assets/js/vendor/popper.min.js"></script>
<script src="./css/bootstrap-4.0.0/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="./Js/KBYT.js"></script>
<script type="text/javascript" src="./Js/KBYT_NCT.js"></script>

</html>