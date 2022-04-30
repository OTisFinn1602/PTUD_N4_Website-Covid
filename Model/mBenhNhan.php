<?php
    include_once ("ketnoi.php");
    class modelBenhNhan{
        function SelectAllBenhNhan(){
            $p = new clsketnoi();
            if($p->ketnoiDB($conn)){
                $string = "SELECT * FROM tbl_benhnhan";
                $table = mysqli_query($conn, $string);
                $p->dongketnoi($conn);
                return $table;
            }else{
                return false; 
            }
        }
        function SelectBenhNhan($a){
            $p = new clsketnoi();
            if($p->ketnoiDB($conn)){
                $string = "SELECT * FROM tbl_benhnhan where id_benhnhan = '$a'";
                $table = mysqli_query($conn, $string);
                $p->dongketnoi($conn);
                return $table;
            }else{
                return false; 
            }
        }
    }
?>