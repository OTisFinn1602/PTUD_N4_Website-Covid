<?php
include_once "View/V_Global/head.php";
?>

<body>
    <?php
    include_once "View/V_Global/header.php";
    ?>
    <?php
    if(isset($_REQUEST['Login'])){
        include_once "View/V_Views/VDangNhap.php";
    }
    else{
        include_once "View/V_Views/VTrangChu.php";
    }
    ?>
    <?php
    // include_once "View/V_Views/VKhaiBaoYTe.php";
    ?>
    <?php
    include_once "View/V_Global/footer.php";
    ?>
</body>
<script src="./Js/jquery-3.6.0.min.js"></script>
<script src="./css/bootstrap-4.0.0/assets/js/vendor/popper.min.js"></script>
<script src="./css/bootstrap-4.0.0/dist/js/bootstrap.min.js"></script>

</html>