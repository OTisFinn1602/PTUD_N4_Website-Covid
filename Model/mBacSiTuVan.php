<?php
    include_once ("ketnoi.php");
    class modelBSTV{
        function SelectBSTV($a){
            $p = new clsketnoi();
            if($p->ketnoiDB($conn)){
                $string = "SELECT ten FROM `tbl_bacsituvan` WHERE id_taikhoan = '$a'";
                $table = mysqli_query($conn, $string);
                $p->dongketnoi($conn);
                return $table;
            }else{
                return false; 
            }
        }
    }
?>