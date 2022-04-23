<?php
// if (isset($_REQUEST['submit'])) {
//     if ($_REQUEST['user'] != null && $_REQUEST['pass'] != null) {
//         if ($_REQUEST['user'] == "0398282162" && $_REQUEST['pass'] == "12345678") {
//             echo '<script>alert("Đăng nhập thành công");</script>';
//             echo header("refresh:0; url='index.php'");
//         } else {
//             echo '<script>alert("Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại.");</script>';
//             echo header("refresh:0; url='index.php?Login'");
//         }
//     } else {
//         echo '<script>alert("Vui lòng nhập đủ thông tin.");</script>';
//         echo header("refresh:0; url='index.php?Login'");
//     }
// }
?>
<div class="container-fluid" style="height: 700px; margin-top: 100px;">
    <div class="pag-login d-flex align-items-center justify-content-center h-100">
        <form class="form_login" action="DNWin.php" method="post">
            <h4>Đăng nhập hệ thống</h4>
            <div class="input-group form-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                </div>
                <input type="text" class="form-control pl-4" name="user" placeholder="Nhập tên tài khoản hoặc SĐT">
            </div>
            <div class="input-group form-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                </div>
                <input type="password" class="form-control pl-4" name="pass" placeholder="Nhập mật khẩu">
            </div>
            <div class="d-flex justify-content-end pr-2">
                <button type="submit" name="submit" class="btn btn-primary">Đăng nhập</button>
            </div>

            <div class="attention">
                <p class="text2">CHÚ Ý: Tên tài khoản là số điện thoại bạn đã <a href=""><b>khai báo y tế</b></a> <br> Mật khẩu mặc định là 12345678</p>
            </div>
        </form>
    </div>
</div>