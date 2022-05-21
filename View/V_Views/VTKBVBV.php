<script type="text/javascript">
    ///////////////////////////////////////////////////////////////////////////////////////////////////
    var tinh_arr = new Array("TP Hồ Chí Minh");
    function print_tinh(tinh_id){
        // given the id of the <select> tag as function argument, it inserts <option> tags
        var option_str = document.getElementById(tinh_id);
        option_str.length=0;
        option_str.options[0] = new Option('Tỉnh,Thành phố','');
        option_str.selectedIndex = 0;
        for (var i=0; i<tinh_arr.length; i++) {
            option_str.options[option_str.length] = new Option(tinh_arr[i],tinh_arr[i]);
        }
    }
    
    function print_quan(quan_id, quan_index){
        var option_str = document.getElementById(quan_id);
        option_str.length=0;
        option_str.options[0] = new Option('Quận,Huyện','');
        option_str.selectedIndex = 0;
        var quan_arr = s_a[quan_index].split("|");
        for (var i=0; i<quan_arr.length; i++) {
            option_str.options[option_str.length] = new Option(quan_arr[i],quan_arr[i]);
        }
    }
    //This function is incorrect, just to demonstrate, please help to correct this
    
    function print_phuong(phuong_id, phuong_index){
        var option_str = document.getElementById(phuong_id);
        option_str.length=0;
        option_str.options[0] = new Option('Phường Xã','');
        option_str.selectedIndex = 0;
        var phuong_arr = s_b[phuong_index].split("|");
        for (var i=0; i<phuong_arr.length; i++) {
            option_str.options[option_str.length] = new Option(phuong_arr[i],phuong_arr[i]);
        }
    }
    function validateForm() {
        var tkbv = document.getElementById('tkbv').value;
        if (tkbv == "") {
            alert("Vui lòng điền thông tin tìm kiếm");
            return false;
        }
        else
        return true;
    }
function validateForm1() {
        var ttinh = document.getElementById('tinh').value;
        var tquan = document.getElementById('quan').value;
    if (ttinh == "") {
            alert("Vui lòng chọn tỉnh");
            return false;
        }
        if (tquan == "") {
            alert("Vui lòng chọn quận");
            return false;
        }
    }
    </script>
    <div class="container-fluid" style="height: 350px;">
        <div class="pag-login d-flex align-items-center justify-content-center h-100">
            <form class="timkiem" action="benhvien.php?HTTKBV" method="post" onsubmit="return validateForm()">
                <h4 style="text-align:center">Tìm Kiếm Thông Tin Bệnh Viện</h4>
                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-filter"></i></span>
                    </div>
                    <input type="text" class="form-control pl-4" id="tkbv" placeholder="Nhập tên bệnh viện hoặc mã bệnh viện" name="thongtinbv">
                </div>
                
                <div class="d-flex justify-content-xl-center">
                    <button type="submit" class="btn btn-primary" name="timkiembenhvien">Tìm kiếm</button>
                </div>
            </form>
        </div>
    </div>
    <div class="container-loc" style="height: 500px; margin-left:33%;margin-top:-110px;">
    <div class="pag-login d-flex align-items-center justify-content-center">
    <form class="timkiem col-12" action="benhvien.php?HTTKBV" method="post" onsubmit="return validateForm1()">
                            <div class="col-5">
                                <label for="tinh">Tỉnh thành</label>
                                <select class="form-control pl-4" onchange="print_quan('quan',this.selectedIndex);" id="tinh" name="tinh">
                                    
                                </select>
                            </div>
                            <div class="col-5">
                                <label for="quan">Quận / huyện</label>
                                <select class="form-control pl-4" onchange="print_phuong('phuong',this.selectedIndex);" id="quan" name="quan">
                                   
                                </select>
                            </div>
                            <div class="col-2" style="margin-top:33px;margin-left:80px;">
                            <button type="submit" class="btn btn-success" name="locbenhvien">Lọc</button>
                            </div>
    </form>
       </div>
       <script language="javascript">print_tinh("tinh");</script>
       </div>