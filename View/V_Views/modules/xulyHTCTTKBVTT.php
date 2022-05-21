<?php
    include("comfig.php");
	$sql_timkiemttbv="SELECT * FROM tbl_benhvien where id_benhvien='$_GET[idbenhvien]'";
	$query_tkttbv=mysqli_query($con,$sql_timkiemttbv);
?>
<div style="margin-top: 10px;" class="container-fluid">
    <div class="pag-login d-flex align-items-center justify-content-center h-100">
        <div class="col-lg-6 center">
        <form class="htcttk" action="#"  method="post">
                        <h3 style="text-align:center">Thông tin bệnh viện</h3>
    	<?php
		while($row = mysqli_fetch_array($query_tkttbv))
        {
		?>                     
                <div class="row col-12 inf-Per"> 
                    <div class="col-12">
                            <div class="form-group">
                                <label for="Name" name="hovaten">Tên bệnh viên: <?php echo $row['ten']; ?></label>
                            </div>
                            <div class="form-group">
                                <label for="CCCD" name="hovaten">Mã bệnh viên: <?php echo $row['mabenhvien']; ?></label>
                            </div>
                            
                            <div class="form-group">
                                <label for="inputDate">Số điện thoại: <?php echo $row['sodienthoai']; ?></label>
                            </div>
                            <div class="form-group">
                                <label for="selectGender">Email: <?php echo $row['email']; ?></label>
                            </div>
                            <div class="form-group">
                                <label for="BHYT" name="BHYT">Tầng: <?php echo $row['tang']; ?></label>
                            </div>
                           <div class="form-group">
                                <label for="inputEmail">Số bệnh nhân tiếp nhận: <?php echo $row['sobenhnhantiepnhan']; ?></label>
                            </div>
                            <div class="form-group">
                                <label for="selectGender">Số bệnh nhân đã tiếp nhận: <?php echo $row['sobenhnhandatiepnhan']; ?></label>
                            </div>
                            <div class="form-group">
                                <label for="inputTang">Số bệnh nhân có thể tiếp nhận: <?php echo $row['sobenhnhancothetiepnhan']; ?></label>
                            </div>
                             <div class="form-group">
                                <label for="Diachi">Địa chỉ: <?php echo $row['diachi'] . ", " . $row['phuong'] . ", " .$row['quan'] . ", " . $row['tinh']; ?></label>
                            </div>          
                     </div>
                 </div>
     	<?php
		}
		?>
        </form>
        </div>
    </div>
</div>