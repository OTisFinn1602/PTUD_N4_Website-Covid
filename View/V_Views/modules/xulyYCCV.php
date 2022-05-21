<?php
include('comfig.php');
$tang=$_POST['tangcv'];
$id_benhvien=$_POST['benhvien'];
$id_benhnhan=$_GET['idbenhnhan'];
if(isset($_POST['guiyeucau']))
{
    $sql_yccv="insert into tbl_phieuchuyenvien(id_benhvien,id_benhnhan,tangcv) values('".$id_benhvien."','".$id_benhnhan."','".$tang."')";
    mysqli_query($con,$sql_yccv);
    header('location:../../../index.php');
}
if(isset($_POST['xacnhan']))
{

    $sql_yccv1="update tbl_phieuchuyenvien set xacnhan=1 where id_PCV='$_GET[idPCV]' ";
    $sql_yccv3="select * from tbl_phieuchuyenvien where id_PCV='$_GET[idPCV]' ";
    mysqli_query($con,$sql_yccv3);
    $query_yccv3=mysqli_query($con,$sql_yccv3);
      while($row=mysqli_fetch_array($query_yccv3))
     {
        $tangcv=$row['tangcv'];
     }
    $sql_yccv4="update tbl_phieuchuyenvien,tbl_benhnhan set tbl_benhnhan.tang='".$tangcv."' where id_PCV='$_GET[idPCV]' and tbl_phieuchuyenvien.id_benhnhan=tbl_benhnhan.id_benhnhan";
    mysqli_query($con,$sql_yccv1);
    mysqli_query($con,$sql_yccv4);
    header('location:../../../BenhVien.php?YCCV');
}
if(isset($_POST['tuchoi']))
{
    $sql_yccv2="update tbl_phieuchuyenvien set xacnhan=2 where id_PCV='$_GET[idPCV]' ";
    mysqli_query($con,$sql_yccv2);
    header('location:../../../BenhVien.php?YCCV');
}
?>