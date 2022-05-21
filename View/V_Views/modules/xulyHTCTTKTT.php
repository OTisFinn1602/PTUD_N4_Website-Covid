<?php
    include("comfig.php");
	$sql_timkiemttbn="SELECT * FROM tbl_benhnhan where id_benhnhan='$_GET[idbenhnhan]'";
	$query_tkbntt=mysqli_query($con,$sql_timkiemttbn);
?>
<div style="margin-top: 100px;" class="container-fluid">
    <div class="pag-login d-flex align-items-center justify-content-center h-100">
        <div class="col-lg-6 center">
        <form class="htcttk" action="#"  method="post">
                        <h3 style="text-align:center">Thông tin cá nhân</h3>
    	<?php
		while($row = mysqli_fetch_array($query_tkbntt))
        {
		?>                     
                <div class="row col-12 inf-Per"> 
                    <div class="col-6">
                    <div class="form-group">
                                <label for="CCCD" name="hovaten">Họ và Tên: <?php echo $row['hovaten']; ?></label>
                            </div>
                            <div class="form-group">
                                <label for="Name" name="hovaten">CMND/CCCD/Hộ chiếu: <?php echo $row['cccd']; ?></label>
                            </div>
                            <div class="form-group">
                                <label for="inputDate">Ngày,tháng,năm: <?php echo $row['ngaysinh']?></label>
                            </div>
                            <div class="form-group">
                                <label for="selectGender">Giới tính: <?php echo $row['gioitinh']?></label>
                            </div>
                            <div class="form-group">
                                <label for="BHYT" name="BHYT">Bảo hiểm y tế: <?php echo $row['bhyt'] ?></label>
                            </div>
                     </div>
                    <div class="col-6">
                            <!-- Email -->
                            <div class="form-group">
                                <label for="BHYT" name="BHYT">Bảo hiểm y tế: <?php echo $row['bhyt'] ?></label>
                            </div>
                           <div class="form-group">
                                <label for="inputEmail">Email: <?php echo $row['email']?></label>
                            </div>
                            <div class="form-group">
                                <label for="selectGender">Triệu chứng: <?php echo $row['trieuchung']?></label>
                            </div>
                            <div class="form-group">
                                <label for="inputTang">Tầng hiện tại : Tầng <?php echo $row['tang']?></label>
                            </div>
                    </div>
                    <div class="form-group col-12">
                                <label for="Diachi">Địa chỉ: <?php echo $row['diachi'] . ", " . $row['phuong'] . ", " .$row['quan'] . ", " . $row['thanhpho']; ?></label>
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