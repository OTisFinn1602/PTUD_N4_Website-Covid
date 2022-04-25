<?php
    include_once ("ketnoi.php");
    class modelAccount{
        // function SelectAllAccount(){
        //     $p = new clsketnoi();
        //     if($p->ketnoiDB($conn)){
        //         $string = "SELECT * FROM taikhoan";
        //         $table = mysqli_query($conn, $string);
        //         $p->dongketnoi($conn);
        //         return $table;
        //     }else{
        //         return false; 
        //     }
        // }
        // function AddAccount($name, $user, $pass){
        //     $p = new clsketnoi();
        //     if($p->ketnoiDB($conn)){
        //         $string = "INSERT INTO tai_khoan (
        //             `AccName` ,
        //             `AccUser` ,
        //             `AccPass`
        //             )
        //             VALUES ('$name', '$user', '$pass');
        //         ";
        //         $table = mysqli_query($conn, $string);
        //         $p->dongketnoi($conn);
        //         return $table;
        //     }else{
        //         return false; 
        //     }
        // }
        function SelectAccount($a, $b){
            $p = new clsketnoi();
            if($p->ketnoiDB($conn)){
                $string = "SELECT * FROM tbl_taikhoan where ten = '$a' and matkhau = '$b'";
                $table = mysqli_query($conn, $string);
                $p->dongketnoi($conn);
                return $table;
            }else{
                return false; 
            }
        }

        function SelectChucVu($a, $b){
            $p = new clsketnoi();
            if($p->ketnoiDB($conn)){
                $string = "SELECT ChucVu FROM tbl_taikhoan where ten = '$a' and matkhau = '$b'";
                $table = mysqli_query($conn, $string);
                $p->dongketnoi($conn);
                return $table;
            }else{
                return false; 
            }
        }
        // function editAccount($acc, $name, $user, $pass){
        //     $p = new clsketnoi();
        //     if($p->ketnoiDB($conn)){
        //         $string = "UPDATE tai_khoan SET `AccName` = '$name',
        //         `AccUser` = '$user', `AccPass` = '$pass' WHERE `tai_khoan`.`AccID` = '$acc' LIMIT 1 ;
        //         ";
        //         $table = mysqli_query($conn, $string);
        //         $p->dongketnoi($conn);
        //         return $table;
        //     }else{
        //         return false; 
        //     }
        // }
        // function deleteAccount($acc){
        //     $p = new clsketnoi();
        //     if($p->ketnoiDB($conn)){
        //         $string = "DELETE FROM tai_khoan where AccID = '$acc' LIMIT 1";
        //         $table = mysqli_query($conn, $string);
        //         $p->dongketnoi($conn);
        //         return $table;
        //     }else{
        //         return false; 
        //     }
        // }
    }
?>