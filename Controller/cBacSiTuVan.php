<?php
    include_once ("Model/mBacSiTuVan.php");
    class controlBSTV{
        function getBSTV($a){
            $p = new modelBSTV();
            $tblBSTV = $p->SelectBSTV($a);
            return $tblBSTV;
        }
    }
?>