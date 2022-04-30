<?php
    include_once ("Model/mHoTroBenhNhan.php");
    class controlHTBN{
        function getAllHTBN(){
            $p = new modelHTBN();
            $tblHTBN = $p->SelectAllHTBN();
            return $tblHTBN;
        }
        function getBSTV($a){
            $p = new modelHTBN();
            $tblBSTV = $p->SelectBSTV($a);
            return $tblBSTV;
        }
    }
?>