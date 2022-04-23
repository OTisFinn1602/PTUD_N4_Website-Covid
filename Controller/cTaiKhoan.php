<?php
    include_once ("Model/mTaiKhoan.php");
    class controlAccount{
        // function getAllAccount(){
        //     $p = new modelAccount();
        //     $tblAccount = $p->SelectAllAccount();
        //     return $tblAccount;
        // }
        // function addAccount($name, $user, $pass){
        //     $p = new modelAccount();
        //     $tblAccount = $p->AddAccount($name, $user, $pass);
        //     return $tblAccount;
        // }
        function getAccount($a, $b){
            $p = new modelAccount();
            $tblAccount = $p->SelectAccount($a, $b);
            return $tblAccount;
        }
        // function editAccount($acc, $name, $user, $pass){
        //     $p = new modelAccount();
        //     $tblAccount = $p->editAccount($acc, $name, $user, $pass);
        //     return $tblAccount;
        // }
        // function deleteAccount($acc){
        //     $p = new modelAccount();
        //     $tblAccount = $p->deleteAccount($acc);
        //     return $tblAccount;
        // }
    }
?>