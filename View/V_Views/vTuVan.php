<?php
ob_start();
?>
<script type="text/javascript">
    ///////////////////////////////////////////////////////////////////////////////////////////////////
    var tinh_arr = new Array("TP Hồ Chí Minh");

    function print_tinh(tinh_id) {
        // given the id of the <select> tag as function argument, it inserts <option> tags
        var option_str = document.getElementById(tinh_id);
        option_str.length = 0;
        option_str.options[0] = new Option('Tỉnh,Thành phố', '');
        option_str.selectedIndex = 0;
        for (var i = 0; i < tinh_arr.length; i++) {
            option_str.options[option_str.length] = new Option(tinh_arr[i], tinh_arr[i]);
        }
    }

    function print_quan(quan_id, quan_index) {
        var option_str = document.getElementById(quan_id);
        option_str.length = 0;
        option_str.options[0] = new Option('Quận,Huyện', '');
        option_str.selectedIndex = 0;
        var quan_arr = s_a[quan_index].split("|");
        for (var i = 0; i < quan_arr.length; i++) {
            option_str.options[option_str.length] = new Option(quan_arr[i], quan_arr[i]);
        }
    }
    //This function is incorrect, just to demonstrate, please help to correct this

    function print_phuong(phuong_id, phuong_index) {
        var option_str = document.getElementById(phuong_id);
        option_str.length = 0;
        option_str.options[0] = new Option('Phường Xã', '');
        option_str.selectedIndex = 0;
        var phuong_arr = s_b[phuong_index].split("|");
        for (var i = 0; i < phuong_arr.length; i++) {
            option_str.options[option_str.length] = new Option(phuong_arr[i], phuong_arr[i]);
        }
    }
</script>
<div class="container-fluid">
    <div class="pag-login d-flex align-items-center justify-content-center h-100">
        <div class="col-lg-10 center">
            <h4>TƯ VẤN</h4>
            <p class="d-flex justify-content-center h-100">Hệ thống tư vấn viên GFCOVID-19</p>
            <?php
            include_once("Controller/cBenhNhan.php");
            $p = new controlBenhNhan();
            $a = $_REQUEST['idBN'];
            $tblBenhNhan = $p->getBenhNhan($a);
            $row = mysqli_fetch_assoc($tblBenhNhan);
            //
            include_once("Controller/cNoiDungTuVan.php");
            $p = new controlNDTV();
            $tblNDTV = $p->getNDTV($a);
            //
            include_once("Controller/cHoTroBenhNhan.php");
            $p = new controlHTBN();
            $idBSTV = $p->getBSTV($a);
            $rowIdBSTV = mysqli_fetch_assoc($idBSTV);
            //
            include_once("Controller/cBacSiTuVan.php");
            $p = new controlBSTV();
            $tenBSTV = $p->getBSTV($a);
            $rowBSTV = mysqli_fetch_assoc($tenBSTV);
            ?>
            <?php
            if ($_SESSION['chucvu'] == 1 || $_SESSION['chucvu'] == 2) {
                echo '<h5>';
                echo $row['hovaten'];
                echo '</h5>';
            } else {
                echo '<h5>';
                echo $rowBSTV['ten'];
                echo '</h5>';
            }
            if ($tblNDTV) {
                if (mysqli_num_rows($tblNDTV) > 0) {
                    while ($row = mysqli_fetch_assoc($tblNDTV)) {
                        if ($_SESSION['chucvu'] == 1 || $_SESSION['chucvu'] == 2) {
                            echo '<div class="row my-2">';
                            echo '<div class="col">';
                            echo '<span class="bg-light p-2 my-2" style="line-height: 40px; border-radius: 5px">';
                            echo $row['noidung'];
                            echo '</span>';
                            echo '</div>';
                            echo '</div>';
                            // 
                            echo '<div class="row my-2">';
                            echo '<div class="col">';
                            echo '<span class="bg-info p-2 my-2 text-white float-right" style="line-height: 20px; border-radius: 5px">';
                            echo $row['noidung'];
                            echo '</span>';
                            echo '</div>';
                            echo '</div>';
                        } else {
                            echo '<div class="row my-2">';
                            echo '<div class="col">';
                            echo '<span class="bg-info p-2 my-2 float-right text-white" style="line-height: 40px; border-radius: 5px">';
                            echo $row['noidung'];
                            echo '</span>';
                            echo '</div>';
                            echo '</div>';
                            // 
                            echo '<div class="row my-2">';
                            echo '<div class="col">';
                            echo '<span class="bg-light p-2 my-2" style="line-height: 20px; border-radius: 5px">';
                            echo $row['noidung'];
                            echo '</span>';
                            echo '</div>';
                            echo '</div>';
                        }
                    }
                }
            }
            ?>
            <div class="info">
                <form action="" method="post">
                    <div class="row col-12 inf-Per">
                        <!-- inf-Per: Thông tin cá nhân -->
                        <div class="col">
                            <!-- Name -->
                            <div class="form-group shadow-textarea">
                                <!-- <label for="inputND"> Nội dung</label> -->
                                <label id="erND" style="color:red"></label>
                                <textarea class="form-control z-depth-1 w-100" placeholder="Nhập..." rows="3" onblur="ktnd()" name="noidung"></textarea>
                            </div>
                        </div>
                    </div>


                    <script language="javascript">
                        print_tinh("tinh");
                    </script>

                    <p></p>

                    <!-- ~Submit~ -->
                    <button type="submit" name="submit" class="btn btn-primary KBYT ">Gửi yêu cầu</button>                    
                </form>
                <?php
                include_once("Controller/cNoiDungTuVan.php");
                $p = new controlNDTV();
                if (isset($_REQUEST['submit'])) {
                    if ($_REQUEST['noidung'] != null) {
                        $b = 1;
                        $c = $_REQUEST['noidung'];
                        $tblNDTV = $p->insertNDTV($a, $b, $c);
                        if ($tblNDTV) {
                            echo '<script>alert("Gửi thành công")</script>';
                            echo header("refresh:0;");
                        } else {
                            echo '<script>alert("Gửi thất bại")</script>';
                            echo header("refresh:0;");
                        }
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>