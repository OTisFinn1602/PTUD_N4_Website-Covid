<style type="text/css">
.container-fluid .pag-login.d-flex.align-items-center.justify-content-center.h-100 .col-lg-10.left h4 {
	font-weight: bold;
}
</style>
<script type="text/javascript" src="././JS/KBTC_NCT.js"></script>
<script type="text/javascript">
    ///////////////////////////////////////////////////////////////////////////////////////////////////
    var tinh_arr = new Array("TP Hồ Chí Minh");

    function print_tinh(tinh_id) {
        // given the id of the <select> tag as function argument, it inserts <option> tags
        var option_str = document.getElementById(tinh_id);
        option_str.length = 0;
        option_str.options[0] = new Option('Tỉnh,Thành phố');
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
<?php
    include("modules/comfig.php");
	$sql_capnhatbn="SELECT * FROM tbl_benhnhan where id_benhnhan='$_GET[idbenhnhan]'";
	$query_capnhatbn=mysqli_query($con,$sql_capnhatbn);
?>
<div class="container-fluid" style="margin-top: 100px;">
    <div class="pag-login d-flex align-items-center justify-content-center h-100">
        <div class="col-lg-10 left">
            <h4>Quản lý bệnh nhân</h4>
            <div class="info">
                <div class="attention">
                    <p class="text2">&nbsp;</p>
                </div>
                <?php
		        while($row = mysqli_fetch_array($query_capnhatbn))
                {
		        ?>
              <form action="View/V_Views/modules/xulyCNTTBN.php?idbenhnhan=<?php echo $row['id_benhnhan']?>" method="post">
                            <!-- Name -->
                            <div class="form-group">
                                <label for="inputName">Họ và Tên: <?php echo $row['hovaten'];?> </label>
                            </div>
                            <!-- Date -->
                            <div class="form-group">
                                <label for="inputDate">Ngày sinh: <?php echo $row['ngaysinh'];?></label>
                                
                            </div>
     						<!-- NumberPhone -->
                            <div class="form-group">
                                <label for="inputSDT">Số điện thoại: <?php echo $row['sodienthoai']?></label>
                               
                            </div>
                            <!-- CCCD -->
                            <div class="form-group">
                                <label for="inputCCCD">CMND/CCCD/Hộ chiếu: <?php echo $row['cccd']?></label>
                            </div>
                            <!-- BHYT -->
                            <div class="form-group">
                                <label for="inputCCCD">Bảo hiểm y tế: <?php echo $row['bhyt']?></label>
                            </div>
                            <!-- ~Địa chỉ~ -->
                            <div class="form-group">
                            	<label for="inputAdd">Địa chỉ: <?php echo $row['diachi'] . ", " . $row['phuong'] . ", " .$row['quan'] . ", " . $row['thanhpho']; ?></label>
                            </div>
                            <!-- Triệu chứng -->
                            <div class="form-group">
                            	<label for="inputtrieuchung">Triệu Chứng</label>
                                <input type="text" class="form-control pl-4" id="trieuchungcn" name="trieuchungcn" value="<?php echo $row['trieuchung']?>">
                            </div>
                            <!-- Số tầng -->
                            <div class="form-group">
                            	<label for="selectSotang">Số tầng</label>
                            	<select class="form-control pl-4" id="tangcn" name="tangcn" value="<?php echo $row['tang']?>">
                                <option value="<?php echo $row['tang']?>"><?php echo $row['tang']?></option>
                                    <option value="0">Tầng 0</option>
                                	<option value="1">Tầng 1</option>
                                	<option value="2">Tầng 2</option>
                                	<option value="3">Tầng 3</option>
                                    <option value="4">Tầng 4</option>
                                    <option value="5">Tầng 5</option>
                            	</select>
                             </div>
                            	<!-- Tình trạng -->                           
                            <div class="form-group">
                            	<label for="selectTinhtrang">Tình trạng</label>
                            	<select class="form-control pl-4" id="tinhtrang" name="tinhtrang">
                                <option value="<?php echo $row['tinhtrang']?>">
                                <?php 
                                if($row['tinhtrang']==0)
                                {
                                    echo 'Đang điều trị';
                                }
                                else
                                {
                                    echo 'Đã khỏi bệnh';
                                }
                                ?>
                            </option>
                                	<option value="0">Đang điều trị</option>
                                	<option value="1">Đã khỏi bệnh</option>
                            	</select>
                            </div>
                    <button type="submit" class="btn btn-primary QLBN" name="luu">Lưu</button>
                </form>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>
<script language="javascript">
                        print_tinh("tinh");
                    </script>
