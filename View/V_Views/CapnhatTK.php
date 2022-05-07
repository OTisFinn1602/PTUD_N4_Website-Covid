<!--Cập nhật tài khoản trong admin-->
<script>
function validateForm()  {
             var ten=document.getElementById('tentaikhoan').value;
             var tma=document.getElementById('tenchucvu').value;
			 var tmk=document.getElementById('matkhau').value;
             if(ten=="") 
			 {
                 alert("Vui lòng nhập tên tài khoản");
                 return false;
             }
			 if(tma=="") 
			 {
                 alert("Vui lòng nhập chức vụ");
                 return false;
             }
			 if(tmk=="") 
			 {
                 alert("Vui lòng nhập mật khẩu");
                 return false;
             }
			 else 
             alert("Cập nhật tài khoản thành công")

             return true;
         }
</script>
<?php
include("modules/comfig.php");
$sql_capnhat="SELECT * FROM tbl_taikhoan where id_taikhoan='$_GET[idtaikhoan]'";
$query_capnhat=mysqli_query($con,$sql_capnhat);

?>
<div class="container-fluid">
    <div class="pag-login d-flex align-items-center justify-content-center h-100">
        <form class="form_login w-75 pb-3 px-3" action="./View/V_Views/modules/xulyTK.php?idtaikhoan=<?php echo $_GET[idtaikhoan];?>" method="POST" onsubmit="return validateForm()">
        <?php 
		while($row=mysqli_fetch_array($query_capnhat))
		{
		?>
            <h4>Cập nhật tài khoản </h4>
            <div class="input-group form-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                </div>
                <input type="text" class="form-control pl-4" placeholder="Tên tài khoản" value="<?php echo $row['ten']?>" name="tentaikhoan1" id="tentaikhoan">
            </div>
            <div class="input-group form-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                </div>
                
                <select class="form-control pl-4" id="tenchucvu1" name="tenchucvu1">
                 <option><?php echo $row['ChucVu']?></option>
                 <option>1</option>
                 <option>2</option>
                 <option>0</option>
                            </select>
            </div>
            <div class="input-group form-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                </div>
                <input type="password" class="form-control pl-4" placeholder="Nhập mật lại khẩu mới"  value="<?php echo $row['matkhau']?>" name="matkhaumoi" id="matkhau">
            </div>
            <div class="d-flex justify-content-center pr-2">
                <button type="submit" class="btn btn-primary" name="Capnhattaikhoan"> Cập nhật </button>
            </div>
            <?php
		}
			?>
        </form>
    </div>
</div>