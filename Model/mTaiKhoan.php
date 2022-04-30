<?php
    include_once ("ketnoi.php");
    class modelAccount{        
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

        function SelectId($a){
            $p = new clsketnoi();
            if($p->ketnoiDB($conn)){
                $string = "SELECT id_taikhoan FROM tbl_taikhoan where ten = '$a'";
                $table = mysqli_query($conn, $string);
                $p->dongketnoi($conn);
                return $table;
            }else{
                return false; 
            }
        }   

        function SelectName($a){
            $p = new clsketnoi();
            if($p->ketnoiDB($conn)){
                $string = "SELECT ten FROM tbl_taikhoan where ten = '$a'";
                $table = mysqli_query($conn, $string);
                $p->dongketnoi($conn);
                return $table;
            }else{
                return false; 
            }
        } 

        function SelectDem($a){
            $p = new clsketnoi();
            if($p->ketnoiDB($conn)){
                $string = "SELECT dem FROM tbl_taikhoan where ten = '$a'";
                $table = mysqli_query($conn, $string);
                $p->dongketnoi($conn);
                return $table;
            }else{
                return false; 
            }
        }   
        
        function UpdateDem($a, $dem){
            $p = new clsketnoi();
            if($p->ketnoiDB($conn)){
                $string = "UPDATE `nhom4`.`tbl_taikhoan` SET `dem` = '$dem' where ten = '$a'";
                $table = mysqli_query($conn, $string);
                $p->dongketnoi($conn);
                return $table;
            }else{
                return false; 
            }
        }
    }
?>