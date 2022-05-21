<?php
include('modules/comfig.php');
$sql_xacnhanyccvbn="select * from tbl_benhnhan,tbl_phieuchuyenvien where id_PCV='$_GET[idPCV]' and
tbl_benhnhan.id_benhnhan=tbl_phieuchuyenvien.id_benhnhan order by id_PCV desc";
$sql_xacnhanyccvbv="select * from tbl_benhvien,tbl_phieuchuyenvien where id_PCV='$_GET[idPCV]' and
tbl_benhvien.id_benhvien=tbl_phieuchuyenvien.id_benhvien order by id_PCV desc";
$sql_xacnhanyccvbv="select * from tbl_benhvien,tbl_phieuchuyenvien where id_PCV='$_GET[idPCV]' and
tbl_benhvien.id_benhvien=tbl_phieuchuyenvien.id_benhvien order by id_PCV desc";
$query_xacnhanyccvbn=mysqli_query($con,$sql_xacnhanyccvbn);
$query_xacnhanyccvbv=mysqli_query($con,$sql_xacnhanyccvbv);
?>
<div style="margin-top: 100px;" class="container-fluid">
    <div class="pag-login d-flex align-items-center justify-content-center h-100">
        <div class="col-lg-10 center">
            <h4>YÊU CẦU CHUYỂN VIỆN</h4>
            
            <div class="info">
                <form action="View/V_Views/modules/xulyYCCV.php?idPCV=<?php echo $_GET[idPCV]?>" method="post">
                <?php
                    while($rowbn=mysqli_fetch_array($query_xacnhanyccvbn))
                     {
                ?>
                <h4>Bệnh nhân</h4>
                    <!-- ~Thông tin cá nhân~ -->
                    <div class="row col-12 inf-Per">
                        <!-- inf-Per: Thông tin cá nhân -->
                        
                        <div class="col-6">
                            <!-- Name -->
                            
                            <div class="form-group">
                                <label for="inputName" name="hovaten">Họ và Tên: <?php echo $rowbn['hovaten'] ?></label>
                            </div>
                            <!-- email -->
                            <div class="form-group">
                                <label for="inputSDT">Điện thoại: <?php echo $rowbn['sodienthoai']?></label>
                            </div>
                            <div class="form-group">
                                <label for="inputDate">Ngày,tháng,năm: <?php echo $rowbn['ngaysinh']?></label>
                            </div>
                            <div class="form-group">
                                <label for="selectGender">Giới tính: <?php echo $rowbn['gioitinh']?></label>
                            </div>
                        </div>

                        <div class="col-6">
                            <!-- Email -->
                           <div class="form-group">
                                <label for="inputEmail">Email: <?php echo $rowbn['email']?></label>
                            </div>
                            <div class="form-group">
                                <label for="selectGender">Triệu chứng: <?php echo $rowbn['trieuchung']?></label>
                            </div>
                            <div class="form-group">
                                <label for="inputTang">Tầng hiện tại : Tầng <?php echo $rowbn['tang']?></label>
                            </div>
                            <div class="form-group">
                                <label for="inputTang">Tầng muốn chuyển : Tầng <?php echo $rowbn['tangcv']?></label>
                            </div>
                        </div>
                        </div>                 
                    <div class="row col-12">
                        <div class="col-12">
                            <label for="diachi">Địa chỉ: <?php echo $rowbn['diachi'].", ". $rowbn['phuong'].", ". $rowbn['quan'].", ". $rowbn['thanhpho']?></label>
                        </div>
                    </div>
                    <?php
                     }
                    ?>
                   
                    <?php
                    while($rowbv=mysqli_fetch_array($query_xacnhanyccvbv))
                     {
                    ?>
                     <h4>Bệnh viện</h4>
                     <div class="row col-12 inf-Per">
                         <div class="col-6">
                            <div class="form-group">
                                <label for="inputName" name="ma">Mã bệnh viện: <?php echo $rowbv['mabenhvien'] ?></label>
                            </div>
                            <div class="form-group">
                                <label for="inputName" name="ten">Tên bệnh viện: <?php echo $rowbv['ten'] ?></label>
                            </div>
                            <div class="form-group">
                                <label for="inputName" name="sdt">Số điện thoại: <?php echo $rowbv['sodienthoai'] ?></label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="inputName" name="email">Email: <?php echo $rowbv['email'] ?></label>
                            </div>
                            <div class="form-group">
                                <label for="inputName" name="tang">Tầng: <?php echo $rowbv['tang'] ?></label>
                            </div>
                            <div class="form-group">
                                <label for="inputName" name="trong">Còn trống: <?php echo $rowbv['sobenhnhancothetiepnhan'] ?></label>
                            </div>
                     </div>
                            <div class="form-group col-12">
                            <label for="diachi">Địa chỉ: <?php echo $rowbv['diachi'].", ". $rowbv['phuong'].", ". $rowbv['quan'].", ". $rowbv['tinh']?></label>
                            </div>
                     </div>
                    <?php
                     }
                     ?>
                    <!-- ~Submit~ -->
                    <div style="text-align:center">
               		<button type="submit" class="btn btn-success" name="xacnhan">Xác Nhận</button>
                    <button type="submit" class="btn btn-danger" name="tuchoi">Từ chối</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>