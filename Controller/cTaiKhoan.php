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
        function updatepass($a, $b){
            $p = new modelAccount();
            $tblAccount = $p->updatePass($a, $b);
            return $tblAccount;
        }
    }
?>