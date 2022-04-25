<!--Thêm tài khoản-->
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
             alert("Tạo tài khoản thành công")

             return true;
         }
</script>
<div class="container-fluid">
    <div class="pag-login d-flex align-items-center justify-content-center h-100">
        <form class="form_login w-50 pb-3 px-3" action="./View/V_Views/modules/xulyTK.php" method="POST" onsubmit="return validateForm()">
            <h4>Thêm tài khoản </h4>
            <div class="input-group form-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                </div>
                <input type="text" class="form-control pl-4" placeholder="Nhập tên tài khoản" name="tentaikhoan" id="tentaikhoan">
            </div>
            <div class="input-group form-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                </div>
                <input type="text" class="form-control pl-4" placeholder="Nhập chức vụ" name="tenchucvu" id="tenchucvu">
            </div>
            <div class="input-group form-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                </div>
                <input type="password" class="form-control pl-4" placeholder="Nhập mật khẩu" name="matkhau" id="matkhau">
            </div>
            <div class="d-flex justify-content-center pr-2">
                <button type="submit" class="btn btn-primary"name="Themtaikhoan" >Thêm tài khoản </button>
            </div>
        </form>
    </div>
</div>