<?php
    class clsketnoi{
        function ketnoiDB(& $con){
            $con = mysqli_connect("localhost", "groupfour", "nhom4");
            mysqli_set_charset($con, "utf8");
            if($con){
                return mysqli_select_db($con, "web_ptud_n4");
            }else{
                return false;
            }
        }
        function dongketnoi($con){
            mysqli_close($con);
        }
    }
?>