<!--Cập nhật bệnh nhân-->
<script>
function validateForm()  {
             var ten=document.getElementById('hovaten').value;
             var tma=document.getElementById('id_benhnhan').value;
             var tsdt=document.getElementById('sodienthoai').value;
             var tcccd=document.getElementById('cccd').value;
             var tbhyt=document.getElementById('bhyt').value;
             var tgt=document.getElementById('gioitinh').value;
             var temail=document.getElementById('email').value;
             var tns=document.getElementById('ngaysinh').value;
             var ttp=document.getElementById('thanhpho').value;
             var tquan=document.getElementById('quan').value;
             var tphuong=document.getElementById('phuong').value;
             var tdc=document.getElementById('diachi').value;
             var ttc=document.getElementById('trieuchung').value;
             var ttang=document.getElementById('tang').value;
             var ttinhtrang=document.getElementById('tinhtrang').value;
             if(ten=="") 
			 {
                 alert("Vui lòng nhập tên bệnh nhân");
                 return false;
             }
			 if(tma=="") 
			 {
                 alert("Vui lòng nhập mã bệnh nhân");
                 return false;
             }
			 if(tsdt=="") 
			 {
                 alert("Vui lòng nhập số điện thoại");
                 return false;
             }
             if(tcccd=="") 
			 {
                 alert("Vui lòng nhập căn cước công dân");
                 return false;
             }
             if(tbhyt=="") 
			 {
                 alert("Vui lòng nhập bảo hiểm y tế");
                 return false;
             }
             if(tgt=="") 
			 {
                 alert("Vui lòng nhập giới tính");
                 return false;
             }
             if(temail=="") 
			 {
                 alert("Vui lòng nhập email");
                 return false;
             }
             if(tns=="") 
			 {
                 alert("Vui lòng nhập ngày sinh");
                 return false;
             }
             if(ttp=="") 
			 {
                 alert("Vui lòng chọn tỉnh/thành phố");
                 return false;
             }
             if(tquan=="") 
			 {
                 alert("Vui lòng chọn quận/huyện");
                 return false;
             }
             if(tphuong=="") 
			 {
                 alert("Vui lòng chọn phường/xã");
                 return false;
             }
             if(tdc=="") 
			 {
                 alert("Vui lòng nhập địa chỉ");
                 return false;
             }
             if(ttc=="") 
			 {
                 alert("Vui lòng nhập triệu chứng");
                 return false;
             }
             if(ttang=="") 
			 {
                 alert("Vui lòng chọn số tầng");
                 return false;
             }
             if(ttinhtrang=="") 
			 {
                 alert("Vui lòng nhập tình trạng");
                 return false;
             }
			 else 
             alert("Cập nhật bệnh nhân thành công")

             return true;
         }
</script>
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
            <h4>Cập nhật bệnh nhân</h4>
            <div class="info">
                <div class="attention">
                    <p class="text2">&nbsp;</p>
                </div>
                <?php
		        while($row = mysqli_fetch_array($query_capnhatbn))
                {
		        ?>
              <form action="View/V_Views/modules/xulyBN.php?idbenhnhan=<?php echo $_GET[idbenhnhan];?>" method="post">
                            <!-- Name -->
                            <div class="form-group">
                                <label for="inputName">Họ Tên (ghi chữ IN HOA)</label>
                                <input type="text" class="form-control pl-4" id="inputName" name="hovatencn" value="<?php echo $row['hovaten']; ?>">
                            </div>
                            <!-- Date -->
                            <div class="form-group">
                                <label for="inputDate">Ngày tháng năm sinh</label>
                                <input type="date" class="form-control pl-4" id="inputDate" name="ngaysinhcn" value="<?php echo $row['ngaysinh'];?>">
                            </div>
     						<!-- NumberPhone -->
                            <div class="form-group">
                                <label for="inputSDT">Số điện thoại</label>
                                <input type="text" class="form-control pl-4" id="inputSDT" name="sodienthoaicn" value="<?php echo $row['sodienthoai']?>">
                            </div>
                            <!-- CCCD -->
                            <div class="form-group">
                                <label for="inputCCCD">CMND/CCCD/Hộ chiếu</label>
                                <input type="text" class="form-control pl-4" id="inputCCCD" name="cccdcn" value="<?php echo $row['cccd']?>">
                            </div>
                            <!-- BHYT -->
                            <div class="form-group">
                                <label for="inputCCCD">Bảo hiểm y tế</label>
                                <input type="text" class="form-control pl-4" id="inputBHYT" name="bhytcn" value="<?php echo $row['bhyt']?>">
                            </div>
                            <!-- Giới tính -->
                            <div class="form-group">
                                <label for="inputGioitinh">Giới tính</label>
                                <input type="text" class="form-control pl-4" id="inputGioitinh" name="gioitinhcn" value="<?php echo $row['gioitinh']?>">
                            </div>
                            <!-- Email -->
                            <div class="form-group">
                                <label for="inputEmail">Email</label>
                                <input type="text" class="form-control pl-4" id="inputEmail" name="emailcn" value="<?php echo $row['email']?>">
                            </div>
                            <!-- ~Địa chỉ~ -->
                            <div class="form-group">
                            	<label for="inputAdd">Địa chỉ</label>
                                <input type="text" class="form-control pl-4" id="inputAdd" name="diachicn" value="<?php echo $row['diachi'];?>">
                            </div>
                            <!-- ~Tỉnh thành~ -->
                            <div class="form-group">
                            	<label for="selectTinh">Tỉnh thành</label>
                            	<select class="form-control pl-4" id="tinh" onchange="print_quan('quan',this.selectedIndex);" name="tinh" value="<?php echo $row['tinh']?>">
                                <option selected="selected" value="<?php echo $row['tinh']?>"><?php echo $row['tinh']?></option>	
                            	</select>
                            </div>
                            <!-- ~Quận/Huyện~ -->
                            <div class="form-group">
                            	<label for="selectQuan">Quận / huyện</label>
                            	<select class="form-control pl-4" id="quan" onchange="print_phuong('phuong',this.selectedIndex);" name="quan" value="<?php echo $row['quan']?>">
                                <option selected="selected" value="<?php echo $row['quan']?>"><?php echo $row['quan']?></option>	
                            </select>
                            </div>
                            <!-- ~Phường/Xã~ -->
                            <div class="form-group">
                            	<label for="selectPhuong">Phường / xã</label>
                            	<select class="form-control pl-4" id="phuong" name="phuong" value="<?php echo $row['phuong']?>">
                                <option selected="selected" value="<?php echo $row['phuong']?>"><?php echo $row['phuong']?></option>	
                            	</select>
                            </div>
                            <!-- Triệu chứng -->
                            <div class="form-group">
                            	<label for="inputMabenhnhan">Triệu Chứng</label>
                                <input type="text" class="form-control pl-4" id="trieuchungcn" name="trieuchungcn" value="<?php echo $row['trieuchung']?>">
                            </div>
                            <!-- Số tầng -->
                            <div class="form-group">
                            	<label for="selectSotang">Số tầng</label>
                            	<select class="form-control pl-4" id="selectSotang" name="tangcn">
                                <option value="<?php echo $row['tang']?>"><?php echo "Tầng"." ".$row['tang']?></option>
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
                            	<select class="form-control pl-4" id="selectTinhtrang" name="tinhtrangcn" value=>
                                <option value="<?php echo $row['tinhtrang']?>"><?php echo $row['tinhtrang']?></option>
                                	<option value="1">Đang điều trị</option>
                                	<option value="0">Đã khỏi bệnh</option>
                            	</select>
                            </div>
                    <button type="submit" class="btn btn-primary" name="Capnhatbenhnhan">Lưu</button>
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
