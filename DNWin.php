<?php
    echo '<meta charset="UTF-8">';
    include_once ("Controller/cTaiKhoan.php");
    $p = new controlAccount();
    session_start();
    if(isset($_REQUEST["submit"])){
        $a = $_REQUEST["user"];
        $b = $_REQUEST["pass"];
        $b = md5($b);
        $acc = $p->getAccount($a, $b);
        $tblAccount = mysqli_num_rows($acc);
        if($tblAccount > 0){
            $_SESSION['dntc'] = true;
            $chucvu = $p->getChucVu($a, $b);
            $row = mysqli_fetch_assoc($chucvu);
            $_SESSION['chucvu'] = $row["ChucVu"];
            echo '<script>alert("Đăng nhập thành công!");</script>';
            echo header("refresh:0; url='index.php'");
        }else{
            echo '<script>alert("Đăng nhập thất bại!");</script>';
            echo header("refresh:0; url='index.php?Login'");
        }
    }else{
        echo header("refresh:0; url='index.php?Login'");
    }
?>