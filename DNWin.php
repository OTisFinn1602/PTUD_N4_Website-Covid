<?php
echo '<meta charset="UTF-8">';
include_once("Controller/cTaiKhoan.php");
$p = new controlAccount();
session_start();
if (isset($_REQUEST["submit"])) {
    if($_REQUEST['user'] == null || $_REQUEST['pass'] == null){
        echo '<script>alert("Nhập đầy đủ thông tin!");</script>';
        echo header("refresh:0; url='index.php?Login'");
    }else{
        $a = $_REQUEST["user"];
        $b = $_REQUEST["pass"];
        $b = md5($b);
        $acc = $p->getAccount($a, $b);
        $tblAccount = mysqli_num_rows($acc);
        $a = $_REQUEST["user"];
        $nameTK = $p->getName($a);
        $tenTK = mysqli_fetch_assoc($nameTK);
        if ($tblAccount > 0) {
            $_SESSION['dntc'] = true;
            $chucvu = $p->getChucVu($a, $b);
            $row = mysqli_fetch_assoc($chucvu);
            $_SESSION['chucvu'] = $row["ChucVu"];
            $_SESSION['tenTK'] = $tenTK['ten'];
            unset($_SESSION['dem']);
            unset($_SESSION['error']);
            unset($_SESSION['notierror']);
            echo '<script>alert("Đăng nhập thành công!");</script>';
            echo header("refresh:0; url='index.php'");
        } else {
            $_SESSION['loss'] = true;
            $_SESSION['dem'] -= 1;
            $_SESSION['notierror'] = '<div class="alert alert-danger">
            Đăng nhập thất bại! Tên tài khoản hoặc mật khẩu sai!
        </div>';
            echo header("refresh:0; url='index.php?Login'");
        }
    }
} else {
    echo header("refresh:0; url='index.php?Login'");
}
