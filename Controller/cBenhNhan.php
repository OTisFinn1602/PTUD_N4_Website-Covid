<?php
    include_once ("Model/mBenhNhan.php");
    class controlBenhNhan{
        function getBenhNhan($a){
            $p = new modelBenhNhan();
            $tblBenhNhan = $p->SelectBenhNhan($a);
            return $tblBenhNhan;
        }
    }
?>