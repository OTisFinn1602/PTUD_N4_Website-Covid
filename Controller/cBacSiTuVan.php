<?php
    include_once ("Model/mBacSiTuVan.php");
    class controlBSTV{
        function getBSTV($a){
            $p = new modelBSTV();
            $tblBSTV = $p->SelectBSTV($a);
            return $tblBSTV;
        }

        function getIDBSTV($a){
            $p = new modelBSTV();
            $tblBSTV = $p->SelectIDBSTV($a);
            return $tblBSTV;
        }
    }
?>