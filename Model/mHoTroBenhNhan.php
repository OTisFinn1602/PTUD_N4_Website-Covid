<?php
    include_once ("ketnoi.php");
    class modelHTBN{
        function SelectAllHTBN(){
            $p = new clsketnoi();
            if($p->ketnoiDB($conn)){
                $string = "SELECT * FROM tbl_phieutuvan";
                $table = mysqli_query($conn, $string);
                $p->dongketnoi($conn);
                return $table;
            }else{
                return false; 
            }
        }
        function SelectBSTV($a){
            $p = new clsketnoi();
            if($p->ketnoiDB($conn)){
                $string = "SELECT id_bs FROM tbl_phieutuvan where idbenhnhan = '$a'";
                $table = mysqli_query($conn, $string);
                $p->dongketnoi($conn);
                return $table;
            }else{
                return false; 
            }
        }
    }
?>