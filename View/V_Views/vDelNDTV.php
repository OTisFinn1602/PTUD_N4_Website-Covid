<?php
include_once("Controller/cNoiDungTuVan.php");
$p = new controlNDTV();
if (isset($_REQUEST['del'])) {
    $a = $_REQUEST['idP'];
    $tblDel = $p->DeleteNDTV($a);
    if ($tblDel) {
        echo '<script>alert("Xóa thành công")</script>';
        // echo header("refresh:0; url='BenhVien.php'");
        include_once("VHoTroBenhNhan.php");
        // header("location: ../VHoTroBenhNhan.php");
    } else {
        echo '<script>alert("Xóa không thành công")</script>';
        include_once("VHoTroBenhNhan.php");
        // echo header("location:../../../../BenhVien.php?HTBN");
    }
}
