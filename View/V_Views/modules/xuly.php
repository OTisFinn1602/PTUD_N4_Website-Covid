<?php
include("comfig.php");
$hovaten = $_POST['hovaten'];
$sodienthoai = $_POST['sodienthoai'];
$cccd = $_POST['cccd'];
$bhyt = $_POST['bhyt'];
$gioitinh = $_POST['gioitinh'];
$email = $_POST['email'];
$ngaysinh = $_POST['ngaysinh'];
$thanhpho = $_POST['tinh'];
$quan = $_POST['quan'];
$phuong = $_POST['phuong'];
$diachi = $_POST['diachi'];
$trieuchung = $_POST['trieuchung'];
$matkhau = md5(12345678);
if (isset($_POST['khaibaoyte'])) {
    $sql_them = "insert into tbl_benhnhan(hovaten,sodienthoai,cccd,bhyt,gioitinh,email,ngaysinh,thanhpho,quan,phuong,diachi,trieuchung) values('" . $hovaten . "','" . $sodienthoai . "','" . $cccd . "','" . $bhyt . "','" . $gioitinh . "','" . $email . "','" . $ngaysinh . "','" . $thanhpho . "','" . $quan . "','" . $phuong . "','" . $diachi . "','" . $trieuchung . "')";
    mysqli_query($con, $sql_them);
    include_once ("Controller/cTaiKhoan.php");
    $p = new controlAccount();
    $a = $sodienthoai;
    $b = $matkhau;
    $tblAccount = $p->getAccount($a, $b);
    $row = mysqli_fetch_assoc($tblAccount);
    if($a == $row['ten']){
        echo '<script>alert("Tài khoản đã có, đăng kí không thành công!");</script>';
    }else{
        $sql_themtk = "insert into tbl_taikhoan(ten,matkhau) values('" . $sodienthoai . "','" . $matkhau . "')";
        mysqli_query($con, $sql_themtk);
        echo '<script>alert("đăng kí thành công!");</script>';
    }
}
?>
<div class="container-xlkbyt">
    <div class="d-flex align-items-center justify-content-center">
        <form class="#" action="#">
            <h3 style="text-align:center">Thông tin cá nhân</h3>
            <p>Họ và Tên: <?php echo $hovaten ?></p>
            <p>CMND/CCCD/Hộ chiếu: <?php echo $cccd ?>
            <p>
            <p>Giới tính: <?php echo $gioitinh ?></p>
            <p>Ngày tháng năm sinh: <?php echo $ngaysinh ?></p>
            <p>Điện thoại: <?php echo $sodienthoai ?></p>
            <p>Bảo hiểm y tế: <?php echo $bhyt ?> </p>
            <p>Email: <?php echo $email ?></p>
            <p>Địa chỉ: <?php echo $diachi . ", " . $phuong . ", " . $quan . ", " . $thanhpho ?></p>
            <p>Triệu chứng: <?php echo $trieuchung ?></p>

        </form>
    </div>
    <div style="text-align:center">
        <p style="color:Red">
            Trân trọng cảm ơn quý khách đã hoàn thành việc khai báo y tế</br>
            Mã đăng nhập: <?php echo $sodienthoai ?></br>
            Mật khẩu: 12345678 </br>
            Vui lòng đổi mật khẩu trước khi đăng nhâp</p>
    </div>
</div>