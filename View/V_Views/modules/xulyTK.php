
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<!--Xử lý tài khoản  -->
<?php
include("comfig.php");
$tenchucvu=$_POST['tenchucvu'];
$tenTK=$_POST['tentaikhoan'];
$matkhau=md5($_POST['matkhau']);
$tenchucvu1=($_POST['tenchucvu1']);
$tenTK1=$_POST['tentaikhoan1'];
$matkhaumoi=md5($_POST['matkhaumoi']);
//Thêm tài khoản bệnh viện
if(isset($_POST['Themtaikhoan']))
{
	$sql_themTKBV="insert into tbl_taikhoan(ten,ChucVu,matkhau) values ('".$tenTK."','".$tenchucvu."','".$matkhau."')";
	mysqli_query($con,$sql_themTKBV);
	header('location:../../../admin.php?QLTK');
}
//Cập nhật tài khoản bệnh viện
else
if(isset($_POST['Capnhattaikhoan']))
{
	$sql_update="Update tbl_taikhoan set ten='".$tenTK1."',ChucVu='".$tenchucvu1."',matkhau='".$matkhaumoi."' where id_taikhoan='$_GET[idtaikhoan]'" ;	
	mysqli_query($con,$sql_update);
	header('location:../../../admin.php?QLTK');
}
//Xóa tài khoản
else
{
	$id=$_GET['idtaikhoan'];
	$sql_xoa="DELETE FROM tbl_taikhoan where id_taikhoan='".$id."'";
	mysqli_query($con,$sql_xoa);
	header('location:../../../admin.php?QLTK');
}
?>
<!--Cập nhật tình trạng sức khỏe -->
<?php
$tinhtranghientai=$_GET['tinhtrang'];
$tinhtrangmoi=$_POST['tinhtrangbenhmoi'];
if(isset($_POST['Luucapnhat']))
{
	$sql_updatebn="Update tbl_benhnhan set tinhtrang='".$tinhtrangmoi."' where tinhtrang='$_GET[tinhtrang]'" ;	
	mysqli_query($con,$sql_updatebn);
	header('location:"../../../index.php?QLTK');
}
?>

</body>
</html>