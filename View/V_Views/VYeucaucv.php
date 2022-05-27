<?php
$sdt = $_GET[idBN];
$sql_YCCV = "select * from tbl_benhnhan where id_benhnhan='" . $sdt . "'";
$query_YCCV = mysqli_query($con, $sql_YCCV);
?>
<div style="margin-top: 100px;" class="container-fluid">
    <div class="pag-login d-flex align-items-center justify-content-center h-100">
        <div class="col-lg-10 center">
            <h4>YÊU CẦU CHUYỂN VIỆN</h4>
            <?php
            while ($row = mysqli_fetch_array($query_YCCV)) {
            ?>
                <div class="info">
                    <form action="View/V_Views/modules/xulyYCCV.php?idbenhnhan=<?php echo $row['id_benhnhan'] ?>" method="post">
                        <!-- ~Thông tin cá nhân~ -->
                        <div class="row col-12 inf-Per">
                            <!-- inf-Per: Thông tin cá nhân -->
                            <div class="col-6">
                                <!-- Name -->
                                <div class="form-group">
                                    <label for="inputName" name="hovaten">Họ và Tên: <?php echo $row['hovaten'] ?></label>
                                </div>
                                <!-- email -->
                                <div class="form-group">
                                    <label for="inputSDT">Điện thoại: <?php echo $row['sodienthoai'] ?></label>
                                </div>
                                <div class="form-group">
                                    <label for="inputDate">Ngày,tháng,năm: <?php echo $row['ngaysinh'] ?></label>
                                </div>
                            </div>

                            <div class="col-6">

                                <div class="form-group">
                                    <label for="selectGender">Giới tính: <?php echo $row['gioitinh'] ?></label>
                                </div>

                                <!-- Email -->
                                <div class="form-group">
                                    <label for="inputEmail">Email: <?php echo $row['email'] ?></label>
                                </div>
                                <div class="form-group">
                                    <label for="inputTang">Tầng hiện tại : Tầng <?php echo $row['tang'] ?></label>
                                </div>
                            </div>
                        </div>

                        <!-- ~Nơi cư trú~ -->


                        <div class="row col-12">
                            <div class="col-12">
                                <label for="diachi">Địa chỉ: <?php echo $row['diachi'] . ", " . $row['phuong'] . ", " . $row['quan'] . ", " . $row['thanhpho'] ?></label>
                            </div>
                        </div>
                        <div class="row col-12 inf-Per">
                            <div class="col-5">
                                <!-- Name -->
                                <div class="form-group">
                                    <label for="selectTang">Chọn tầng muốn chuyển</label>
                                    <select class="form-control pl-4" id="selectTang" name="tangcv">
                                        <option value="0">Tầng 0</option>
                                        <option value="1">Tầng 1</option>
                                        <option value="2">Tầng 2</option>
                                        <option value="3">Tầng 3</option>
                                        <option value="4">Tầng 4</option>
                                        <option value="5">Tầng 5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-5">
                                <!-- Name -->
                                <div class="form-group">
                                    <label for="selectBenhvien">Chọn bệnh viện </label>
                                    <select class="form-control pl-4" id="benhvien" name="benhvien">
                                        <?php

                                        $sql_benhvien = "select * from tbl_benhvien order by id_benhvien desc ";
                                        $query_benhvien = mysqli_query($con, $sql_benhvien);
                                        while ($row_benhvien = mysqli_fetch_array($query_benhvien)) {

                                        ?>
                                            <option value="<?php echo $row_benhvien['id_benhvien'] ?>"><?php echo $row_benhvien['ten'] ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- ~Submit~ -->
                        <button type="submit" class="btn btn-primary" name="guiyeucau">Gửi yêu cầu</button>
                    </form>
                </div>
        </div>
    <?php
            }
    ?>
    </div>
</div>
</div>
</div>