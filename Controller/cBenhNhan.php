<?php
    include_once ("Model/mBenhNhan.php");
    class controlBenhNhan{
        function getBenhNhan($a){
            $p = new modelBenhNhan();
            $tblBenhNhan = $p->SelectBenhNhan($a);
            return $tblBenhNhan;
        }

        function getIDBenhNhan($a){
            $p = new modelBenhNhan();
            $tblBenhNhan = $p->SelectIDBenhNhan($a);
            return $tblBenhNhan;
        }
    }
?>