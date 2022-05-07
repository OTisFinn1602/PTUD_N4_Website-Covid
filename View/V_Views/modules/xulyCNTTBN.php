<?php
include("comfig.php");
$trieuchung=$_POST['trieuchungcn'];
$tang=$_POST['tangcn'];
$tinhtrang=$_POST['tinhtrang'];
if(isset($_POST['luu']))
{
	$sql_uptt="Update tbl_benhnhan set trieuchung='".$trieuchung."', tang='".$tang."', tinhtrang='".$tinhtrang."' where id_benhnhan='$_GET[idbenhnhan]'";
	$query_uptt=mysqli_query($con,$sql_uptt);
	header('location:../../../benhvien.php?TTBN');
}
?>