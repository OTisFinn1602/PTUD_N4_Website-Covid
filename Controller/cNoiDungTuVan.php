<?php
    include_once ("Model/mNoiDungTuVan.php");
    class controlNDTV{
        function getNDTV($a){
            $p = new modelNoiDungTuVan();
            $tblNDTV = $p->SelectNoiDungTuVan($a);
            return $tblNDTV;
        }
        // 
        function insertCH($a, $c){
            $p = new modelNoiDungTuVan();
            $tblNDTV = $p->Insertcauhoi($a, $c);
            return $tblNDTV;
        }
        function insertTL($a, $b, $c){
            $p = new modelNoiDungTuVan();
            $tblNDTV = $p->Inserttraloi($a, $b, $c);
            return $tblNDTV;
        }
        function DeleteNDTV($a){
            $p = new modelNoiDungTuVan();
            $tblNDTV = $p->DeleteNoiDungTuVan($a);
            return $tblNDTV;
        }
    }
?>