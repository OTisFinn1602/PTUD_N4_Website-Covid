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
            echo '<script>alert("Đăng nhập thành công!");</script>';
            echo header("refresh:0; url='index.php'");
        } else {
            $_SESSION['loss'] = true;
            $a = $tenTK['ten'];
            $tblAccount = $p->getDem($a);
            $row = mysqli_fetch_assoc($tblAccount);
            $c = $row['dem'];
            $dem = $c++;
            $tbldem = $p->UpdateDem($a, $dem);
            $_SESSION['dem'] = 5-$dem;
            echo '<script>alert("Đăng nhập thất bại!");</script>';
            echo header("refresh:0; url='index.php?Login'");
        }
    }
} else {
    echo header("refresh:0; url='index.php?Login'");
}
