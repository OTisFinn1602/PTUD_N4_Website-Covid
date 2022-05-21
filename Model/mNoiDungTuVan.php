<?php
    include_once ("ketnoi.php");
    class modelNoiDungTuVan{
        function SelectNoiDungTuVan($a){
            $p = new clsketnoi();
            if($p->ketnoiDB($conn)){
                $string = "SELECT * FROM tbl_phieutuvan, tbl_benhnhan where tbl_phieutuvan.idbenhnhan = '$a' and tbl_benhnhan.id_benhnhan = tbl_phieutuvan.idbenhnhan";
                $table = mysqli_query($conn, $string);
                $p->dongketnoi($conn);
                return $table;
            }else{
                return false; 
            }
        }
        function Insertcauhoi($a, $c){
            $p = new clsketnoi();
            if($p->ketnoiDB($conn)){
                $string = "INSERT INTO `nhom4`.`tbl_phieutuvan` (
                    `idbenhnhan` ,
                    `cauhoi`
                    )
                    VALUES ('$a', '$c');
                    ";
                $table = mysqli_query($conn, $string);
                $p->dongketnoi($conn);
                return $table;
            }else{
                return false; 
            }
        }
        function Inserttraloi($a, $b, $c){
            $p = new clsketnoi();
            if($p->ketnoiDB($conn)){
                $string = "INSERT INTO `nhom4`.`tbl_phieutuvan` (
                    `idbenhnhan` ,
                    `id_bs`,
                    `traloi`
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
        function DeleteNoiDungTuVan($a){
            $p = new clsketnoi();
            if($p->ketnoiDB($conn)){
                $string = "DELETE FROM `tbl_phieutuvan` WHERE `tbl_phieutuvan`.`id_phieutv` = $a LIMIT 1";
                $table = mysqli_query($conn, $string);
                $p->dongketnoi($conn);
                return $table;
            }else{
                return false; 
            }
        }
    }
?>