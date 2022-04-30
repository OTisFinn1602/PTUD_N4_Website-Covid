<?php
    include_once ("Model/mTaiKhoan.php");
    class controlAccount{
        function getAccount($a, $b){
            $p = new modelAccount();
            $tblAccount = $p->SelectAccount($a, $b);
            return $tblAccount;
        }
        function getChucVu($a, $b){
            $p = new modelAccount();
            $tblAccount = $p->SelectChucVu($a, $b);
            return $tblAccount;
        }
        function getId($a){
            $p = new modelAccount();
            $tblAccount = $p->SelectId($a);
            return $tblAccount;
        }
        function getName($a){
            $p = new modelAccount();
            $tblAccount = $p->SelectName($a);
            return $tblAccount;
        }
        function getDem($a){
            $p = new modelAccount();
            $tblAccount = $p->SelectDem($a);
            return $tblAccount;
        }
        function UpdateDem($a, $dem){
            $p = new modelAccount();
            $tblAccount = $p->UpdateDem($a, $dem);
            return $tblAccount;
        }
    }
?>