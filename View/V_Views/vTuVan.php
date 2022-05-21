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
        <div class="col-lg-6 center bg-light py-5">
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
            $idbs = $rowIdBSTV['id_bs'];
            //
            include_once("Controller/cBacSiTuVan.php");
            $p = new controlBSTV();
            $tenBSTV = $p->getBSTV($idbs);
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
                    while ($rownd = mysqli_fetch_assoc($tblNDTV)) {
                        if ($_SESSION['chucvu'] == 1 || $_SESSION['chucvu'] == 2) {
                            if ($rownd['traloi'] != null) {
                                echo '<div class="row my-2">';
                                echo '<div class="col">';
                                echo '<span class="bg-info float-right p-2 my-2 text-white" style="line-height: 40px; border-radius: 5px">';
                                echo $rownd['traloi'];
                                echo '</span>';
                                echo '</div>';
                                echo '</div>';
                            }
                            // 
                            if ($rownd['cauhoi'] != null) {
                                echo '<div class="row my-2">';
                                echo '<div class="col">';
                                echo '<span class="bg-light float-left p-2 my-2 border border-primary text-dark" style="line-height: 20px; border-radius: 5px">';
                                echo $rownd['cauhoi'];
                                echo '</span>';
                                echo '</div>';
                                echo '</div>';
                            }
                        }
                        if ($_SESSION['chucvu'] == 0) {
                            if ($rownd['cauhoi'] != null) {
                                echo '<div class="row my-2">';
                                echo '<div class="col">';
                                echo '<span class="bg-info p-2 my-2 float-right text-white" style="line-height: 40px; border-radius: 5px">';
                                echo $rownd['cauhoi'];
                                echo '</span>';
                                echo '</div>';
                                echo '</div>';
                            }
                            // 
                            if ($rownd['traloi'] != null) {
                                echo '<div class="row my-2">';
                                echo '<div class="col">';
                                echo '<span class="bg-light float-left p-2 my-2 border border-primary text-dark" style="line-height: 20px; border-radius: 5px">';
                                echo $rownd['traloi'];
                                echo '</span>';
                                echo '</div>';
                                echo '</div>';
                            }
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
                        $chucvu = $_SESSION['chucvu'];
                        switch ($chucvu) {
                            case 0:
                                include_once("Controller/cBenhNhan.php");
                                $pbn = new controlBenhNhan();
                                $sdt = $_SESSION['tenTK'];
                                $tblBN = $pbn->getIDBenhNhan($sdt);
                                $row = mysqli_fetch_assoc($tblBN);
                                $a = $row['id_benhnhan'];
                                $c = $_REQUEST['noidung'];
                                $tblNDTV = $p->insertCH($a, $c);
                                if ($tblNDTV) {
                                    header("refresh:0; url='index.php?reply&idBN=" . $a . "'");
                                } else {
                                    echo '<script>alert("Gửi thất bại")</script>';
                                    echo header("refresh:0; url='index.php?reply&idBN=" . $a . "'");
                                }
                            break;
                            case 2:
                                $sdt = $_SESSION['tenTK'];
                                include_once("Controller/cTaiKhoan.php");
                                $ptk = new controlAccount();
                                $tblTK = $ptk->getId($sdt);
                                $rowtk = mysqli_fetch_assoc($tblTK);
                                $id = $rowtk['id_taikhoan'];
                                include_once("Controller/cBacSiTuVan.php");
                                $pbstv = new controlBSTV();
                                $tblBSTV = $pbstv->getIDBSTV($id);
                                $row = mysqli_fetch_assoc($tblBSTV);
                                $b = $row['id_bs'];
                                $c = $_REQUEST['noidung'];
                                $tblNDTV = $p->insertTL($a, $b, $c);
                                if ($tblNDTV) {
                                    header("refresh:0; url='BenhVien.php?reply&idBN=" . $a . "'");
                                } else {
                                    echo '<script>alert("Gửi thất bại")</script>';
                                    echo header("refresh:0; url='BenhVien.php?reply&idBN=" . $a . "'");
                                }
                            break;
                        }
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>