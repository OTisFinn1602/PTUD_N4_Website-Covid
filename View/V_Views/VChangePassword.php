<?php
ob_start();
session_start();
echo '<meta charset="UTF-8">';
?>
<div class="container-fluid" style="height: 610px;">
    <div class="pag-login d-flex align-items-center justify-content-center h-100">
        <form class="form_login w-25" action="" method="post">
            <h4>Thay đổi mật khẩu hệ thống</h4>
            <?php
            echo $_SESSION['notierror'];

            ?>
            <div class="input-group form-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                </div>
                <input type="password" class="form-control pl-4" name="oldpass" placeholder="Nhập mật khẩu cũ">
            </div>
            <div class="input-group form-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                </div>
                <input type="password" class="form-control pl-4" name="newpass" placeholder="Nhập mật khẩu mới">
            </div>
            <div class="input-group form-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                </div>
                <input type="password" class="form-control pl-4" name="renewpass" placeholder="Nhập lại mật khẩu">
            </div>
            <div class="d-flex justify-content-end pr-2">
                <button type="submit" name="submit" class="btn btn-primary">Đăng nhập</button>
            </div>

        </form>
        <?php
        include_once "./Controller/cTaiKhoan.php";
        $p = new controlAccount();
        $a = $_SESSION['tenTK'];
        if (isset($_REQUEST['submit'])) {
            if ($_REQUEST['renewpass'] == $_REQUEST['newpass']) {
                $b = $_REQUEST["renewpass"];
                $b = md5($b);
                $changepass = $p->updatepass($a, $b);
                if ($changepass) {
                    echo '<script>alert("Thay đổi mật khẩu thành công!");</script>';
                    echo header("refresh:0; url='index.php'");
                }else{
                    echo '<script>alert("Thay đổi mật khẩu thất bại! ");</script>';
                    echo header("refresh:0; url='index.php'");
                }
            }
        }
        ?>
    </div>
</div>
</body>