<?php
include("comfig.php");
$hovaten=$_POST['hovatencn'];
$sodienthoaicn=$_POST['sodienthoaicn'];
$cccdcn=$_POST['cccdcn'];
$bhytcn=$_POST['bhytcn'];
$gioitinhcn=$_POST['gioitinhcn'];
$emailcn=$_POST['emailcn'];
$ngaysinhcn=$_POST['ngaysinhcn'];
$tinh=$_POST['tinh'];
$quan=$_POST['quan'];
$phuong=$_POST['phuong'];
$diachicn=$_POST['diachicn'];
$trieuchungcn=$_POST['trieuchungcn'];
$tangcn=$_POST['tangcn'];
$tinhtrangcn=$_POST['tinhtrangcn'];
//Cập nhật bệnh nhân
if(isset($_POST['Capnhatbenhnhan']))
{
	$sql_update="Update tbl_benhnhan set hovaten='".$hovaten."',sodienthoai='".$sodienthoaicn."',cccd='".$cccdcn."',bhyt='".$bhytcn."',
	gioitinh='".$gioitinhcn."',email='".$emailcn."',ngaysinh='".$ngaysinhcn."',thanhpho='".$tinh."',
	quan='".$quan."',phuong='".$phuong."',diachi='".$diachicn."',trieuchung='".$trieuchungcn."',tang='".$tangcn."', tinhtrang='".$tinhtrangcn."' where id_benhnhan='$_GET[idbenhnhan]'";	
	mysqli_query($con,$sql_update);
	header('location:../../../admin.php?QLBN');
}
?>