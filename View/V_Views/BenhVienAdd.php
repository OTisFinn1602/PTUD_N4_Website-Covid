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
        <form class="form_login w-75 pb-3 px-3" action="#" method="post">
            <h4>Thêm bệnh viện </h4>
            <!-- tên -->
            <div class="row col-12">
                <div class="col-3">
                    <span class="">Tên bệnh viện</span>
                </div>
                <div class="col">
                    <div class="input-group form-group">
                        <input type="text" class="form-control pl-4" placeholder="Tên bệnh viện">
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
                        <input type="text" class="form-control pl-4" placeholder="Mã bệnh viện">
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
                        <input type="text" class="form-control pl-4" placeholder="Địa chỉ bệnh viện">
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
                        <input type="text" class="form-control pl-4" placeholder="Số điện thoại">
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
                        <input type="text" class="form-control pl-4" placeholder="Email">
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
                        <select class="form-control pl-4" id="selectSotang">
                            <option value="" disabled class="font-weight-bold">Chọn tầng</option>
                            <option value="Tầng 0">Tầng 0</option>
                            <option value="Tầng 1">Tầng 1</option>
                            <option value="Tầng 2">Tầng 2</option>
                            <option value="Tầng 3">Tầng 3</option>
                            <option value="Tầng 4">Tầng 4</option>
                            <option value="Tầng 5">Tầng 5</option>
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
                        <input type="text" class="form-control pl-4" placeholder="Số bệnh nhân tiếp nhận">
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
                        <input type="text" class="form-control pl-4" placeholder="Số bệnh nhân đang điều trị">
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
                        <input type="text" class="form-control pl-4" placeholder="Số BN có thể tiếp nhận thêm">
                    </div>
                </div>
            </div>
            <!-- button -->
            <div class="d-flex justify-content-center pr-2">
                <button type="submit" class="btn btn-primary"> Thêm bệnh viện </button>
            </div>
        </form>
    </div>
</div>
</div>
<script language="javascript">
    print_tinh("tinh");
</script>