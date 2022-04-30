<?php
    include_once ("Model/mNoiDungTuVan.php");
    class controlNDTV{
        function getNDTV($a){
            $p = new modelNoiDungTuVan();
            $tblNDTV = $p->SelectNoiDungTuVan($a);
            return $tblNDTV;
        }
        function insertNDTV($a, $b, $c){
            $p = new modelNoiDungTuVan();
            $tblNDTV = $p->InsertNoiDungTuVan($a, $b, $c);
            return $tblNDTV;
        }
    }
?>