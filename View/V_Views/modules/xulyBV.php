<?php
include("comfig.php");
$tenbv=$_POST['ten'];
$mabv=$_POST['mabenhvien'];
$diachi=$_POST['diachi'];
$tinh=$_POST['tinh'];
$quan=$_POST['quan'];
$phuong=$_POST['phuong'];
$sdt=$_POST['sodienthoai'];
$Email=$_POST['email'];
$tangbv=$_POST['tang'];
$sotiepnhan=$_POST['sobenhnhantiepnhan'];
$sodatiepnhan=$_POST['sobenhnhandatiepnhan'];
$socothetiepnhan=$_POST['sobenhnhancothetiepnhan'];
//Thêm bệnh viện
if(isset($_POST['Thembenhvien']))
{
	$sql_themBV="insert into tbl_benhvien(ten,mabenhvien,email,sodienthoai,tang,tinh,quan,phuong,diachi,sobenhnhantiepnhan,sobenhnhandatiepnhan,sobenhnhancothetiepnhan) values ('".$tenbv."','".$mabv."','".$Email."','".$sdt."','".$tangbv."','".$tinh."','".$quan."','".$phuong."','".$diachi."','".$sotiepnhan."','".$sodatiepnhan."','".$socothetiepnhan."')";
	mysqli_query($con,$sql_themBV);
	header('location:../../../admin.php?QLBV');
}
//Cập nhật tài khoản bệnh viện
else
if(isset($_POST['Capnhatbenhvien']))
{
	$sql_update="Update tbl_benhvien set ten='".$tenbv."',mabenhvien='".$mabv."',diachi='".$diachi."',tinh='".$tinh."',
	quan='".$quan."',phuong='".$phuong."',sodienthoai='".$sdt."',email='".$Email."',tang='".$tangbv."', 
	sobenhnhantiepnhan='".$sotiepnhan."',sobenhnhandatiepnhan='".$sodatiepnhan."',sobenhnhancothetiepnhan='".$socothetiepnhan."' where id_benhvien='$_GET[idbenhvien]'";	
	mysqli_query($con,$sql_update);
	header('location:../../../admin.php?QLBV');
}
//Xóa bệnh viện
else
{
	$id=$_GET['idbenhvien'];
	$sql_xoa="DELETE FROM tbl_benhvien where id_benhvien='".$id."'";
	mysqli_query($con,$sql_xoa);
	header('location:../../../admin.php?QLBV');
}
?>