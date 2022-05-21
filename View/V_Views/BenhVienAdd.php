<!--Thêm bệnh viện-->
<script>
function validateForm()  {
             var ten=document.getElementById('ten').value;
             var tma=document.getElementById('id_benhvien').value;
			 var tdc=document.getElementById('diachi').value;
             var ttinh=document.getElementById('tinh').value;
             var tquan=document.getElementById('quan').value;
             var tphuong=document.getElementById('phuong').value;
             var tsdt=document.getElementById('sodienthoai').value;
             var temail=document.getElementById('email').value;
             var ttang=document.getElementById('tang').value;
             var ttiepnhan=document.getElementById('sobenhnhantiepnhan').value;
             var tdatiepnhan=document.getElementById('sobenhnhandatiepnhan').value;
             var ttiepnhanthem=document.getElementById('sobenhnhancothetiepnhan').value;
             if(ten=="") 
			 {
                 alert("Vui lòng nhập tên bệnh viện");
                 return false;
             }
			 if(tma=="") 
			 {
                 alert("Vui lòng nhập mã bệnh viện");
                 return false;
             }
			 if(tdc=="") 
			 {
                 alert("Vui lòng nhập địa chỉ");
                 return false;
             }
             if(ttinh=="") 
			 {
                 alert("Vui lòng chọn tỉnh thành");
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
             if(tsdt=="") 
			 {
                 alert("Vui lòng nhập số điện thoại");
                 return false;
             }
             if(temail=="") 
			 {
                 alert("Vui lòng nhập email bệnh viện");
                 return false;
             }
             if(ttang=="") 
			 {
                 alert("Vui lòng chọn số tầng");
                 return false;
             }
             if(ttiepnhan=="") 
			 {
                 alert("Vui lòng số lượng bệnh nhân tiếp nhận");
                 return false;
             }
             if(tdatiepnhan=="") 
			 {
                 alert("Vui lòng nhập số lượng bệnh nhân đã tiếp nhận");
                 return false;
             }
             if(ttiepnhanthem=="") 
			 {
                 alert("Vui lòng nhập số lượng bệnh nhân có thể tiếp nhận thêm");
                 return false;
             }
			 else 
             alert("Tạo bệnh viện thành công")

             return true;
         }
</script>
<script>
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
        <form class="form_login w-75 pb-3 px-3" action="./View/V_Views/modules/xulyBV.php" method="POST" onsubmit="return validateForm()">
            <h4>Thêm bệnh viện </h4>
            <!-- tên -->
            <div class="row col-12">
                <div class="col-3">
                    <span class="">Tên bệnh viện</span>
                </div>
                <div class="col">
                    <div class="input-group form-group">
                        <input type="text" class="form-control pl-4" placeholder="Tên bệnh viện" name="ten" id="ten">
                    </div>
                </div>
            </div>
            <!-- Mã -->
            <div class="row col-12">
                <div class="col-3">
                    <span class="">Mã bệnh viện</span>
                </div>
                <div class="col">
                    <div class="input-group form-group">
                        <input type="text" class="form-control pl-4" placeholder="Mã bệnh viện" name="mabenhvien" id="mabenhvien">
                    </div>
                </div>
            </div>
            <!-- Tỉnh/Quận/Huyện -->
            <div class="row col-12">
                <div class="col-3">
                    <span>Địa chỉ</span>
                </div>
                <div class="col">
                    <div class="input-group form-group">
                        <select class="form-control pl-4" onchange="print_quan('quan',this.selectedIndex);" id="tinh" name="tinh"></select>
                    </div>
                </div>
                <div class="col">
                    <select class="form-control pl-4" onchange="print_phuong('phuong',this.selectedIndex);" id="quan" name="quan"></select>
                </div>
                <div class="col">
                    <select class="form-control pl-4" id="phuong" name="phuong"></select>
                </div>
            </div>
            <!-- Địa chỉ -->
            <div class="row col-12">
                <div class="col-3">
                </div>
                <div class="col">
                    <div class="input-group form-group">
                        <input type="text" class="form-control pl-4" placeholder="Địa chỉ bệnh viện" name="diachi" id="diachi">
                    </div>
                </div>
            </div>
            <!-- phone -->
            <div class="row col-12">
                <div class="col-3">
                    <span class="">Số điện thoại</span>
                </div>
                <div class="col">
                    <div class="input-group form-group">
                        <input type="text" class="form-control pl-4" placeholder="Số điện thoại" name="sodienthoai" id="sodienthoai">
                    </div>
                </div>
            </div>
            <!-- email -->
            <div class="row col-12">
                <div class="col-3">
                    <span class="">Email</span>
                </div>
                <div class="col">
                    <div class="input-group form-group">
                        <input type="text" class="form-control pl-4" placeholder="Email" name="email" id="email">
                    </div>
                </div>
            </div>
            <!-- Tầng -->
            <div class="row col-12">
                <div class="col-3">
                    <span class="">Tầng</span>
                </div>
                <div class="col">
                    <div class="input-group form-group">
                        <select class="form-control pl-4" id="selectSotang" name="tang">
                            <option value="" disabled class="font-weight-bold">Chọn tầng</option>
                            <option value="0">Tầng 0</option>
                            <option value="1">Tầng 1</option>
                            <option value="2">Tầng 2</option>
                            <option value="3">Tầng 3</option>
                            <option value="4">Tầng 4</option>
                            <option value="5">Tầng 5</option>
                        </select>
                    </div>
                </div>
            </div>
            <!-- tiếp nhận -->
            <div class="row col-12">
                <div class="col-3">
                    <span class="">Số bệnh nhân tiếp nhận</span>
                </div>
                <div class="col">
                    <div class="input-group form-group">
                        <input type="text" class="form-control pl-4" placeholder="Số bệnh nhân tiếp nhận" name="sobenhnhantiepnhan" id="sobnehnhantiepnhan">
                    </div>
                </div>
            </div>
            <!-- Điều trị -->
            <div class="row col-12">
                <div class="col-3">
                    <span class="">Số bệnh nhân đang điều trị</span>
                </div>
                <div class="col">
                    <div class="input-group form-group">
                        <input type="text" class="form-control pl-4" placeholder="Số bệnh nhân đang điều trị" name="sobenhnhandatiepnhan" id="sobenhnhandatiepnhan">
                    </div>
                </div>
            </div>
            <!-- Tiếp nhận thêm -->
            <div class="row col-12">
                <div class="col-3">
                    <span class="">Số BN có thể tiếp nhận thêm</span>
                </div>
                <div class="col">
                    <div class="input-group form-group">
                        <input type="text" class="form-control pl-4" placeholder="Số BN có thể tiếp nhận thêm" name="sobenhnhancothetiepnhan" id="sobenhnhancothetiepnhan">
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center pr-2">
                <button type="submit" class="btn btn-primary" name="Thembenhvien"> Thêm bệnh viện </button>
            </div>
        </form>
    </div>
</div>
</div>
<script language="javascript">
    print_tinh("tinh");
</script>