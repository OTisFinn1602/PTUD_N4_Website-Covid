<?php
    include_once ("ketnoi.php");
    class modelNoiDungTuVan{
        function SelectNoiDungTuVan($a){
            $p = new clsketnoi();
            if($p->ketnoiDB($conn)){
                $string = "SELECT noidung FROM tbl_phieutuvan where idbenhnhan = '$a'";
                $table = mysqli_query($conn, $string);
                $p->dongketnoi($conn);
                return $table;
            }else{
                return false; 
            }
        }
        function InsertNoiDungTuVan($a, $b, $c){
            $p = new clsketnoi();
            if($p->ketnoiDB($conn)){
                $string = "INSERT INTO `nhom4`.`tbl_phieutuvan` (
                    `idbenhnhan` ,
                    `id_bs` ,
                    `noidung`
                    )
                    VALUES ('$a', '$b', '$c');
                    ";
                $table = mysqli_query($conn, $string);
                $p->dongketnoi($conn);
                return $table;
            }else{
                return false; 
            }
        }
    }
?>