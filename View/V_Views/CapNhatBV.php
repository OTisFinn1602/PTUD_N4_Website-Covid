<!--Cập nhật bệnh viện-->
<script>
    function validateForm() {
        var ten = document.getElementById('ten').value;
        var tma = document.getElementById('id_benhvien').value;
        var tdc = document.getElementById('diachi').value;
        var ttinh = document.getElementById('tinh').value;
        var tquan = document.getElementById('quan').value;
        var tphuong = document.getElementById('phuong').value;
        var tsdt = document.getElementById('sodienthoai').value;
        var temail = document.getElementById('email').value;
        var ttang = document.getElementById('tang').value;
        var ttiepnhan = document.getElementById('sobenhnhantiepnhan').value;
        var tdatiepnhan = document.getElementById('sobenhnhandatiepnhan').value;
        var ttiepnhanthem = document.getElementById('sobenhnhancothetiepnhan').value;
        if (ten == "") {
            alert("Vui lòng nhập tên bệnh viện");
            return false;
        }
        if (tma == "") {
            alert("Vui lòng nhập mã bệnh viện");
            return false;
        }
        if (tdc == "") {
            alert("Vui lòng nhập địa chỉ");
            return false;
        }
        if (ttinh == "") {
            alert("Vui lòng chọn tỉnh thành");
            return false;
        }
        if (tquan == "") {
            alert("Vui lòng chọn quận/huyện");
            return false;
        }
        if (tphuong == "") {
            alert("Vui lòng chọn phường/xã");
            return false;
        }
        if (tsdt == "") {
            alert("Vui lòng nhập số điện thoại");
            return false;
        }
        if (temail == "") {
            alert("Vui lòng nhập email bệnh viện");
            return false;
        }
        if (ttang == "") {
            alert("Vui lòng chọn số tầng");
            return false;
        }
        if (ttiepnhan == "") {
            alert("Vui lòng số lượng bệnh nhân tiếp nhận");
            return false;
        }
        if (tdatiepnhan == "") {
            alert("Vui lòng nhập số lượng bệnh nhân đã tiếp nhận");
            return false;
        }
        if (ttiepnhanthem == "") {
            alert("Vui lòng nhập số lượng bệnh nhân có thể tiếp nhận thêm");
            return false;
        } else
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
<?php
include("modules/comfig.php");
$sql_capnhat = "SELECT * FROM tbl_benhvien where id_benhvien='$_GET[idbenhvien]'";
$query_capnhat = mysqli_query($con, $sql_capnhat);
?>
<div class="container-fluid">
    <div class="pag-login d-flex align-items-center justify-content-center h-100">
        <form class="form_login w-75 pb-3 px-3" action="./View/V_Views/modules/xulyBV.php?idbenhvien=<?php echo $_GET[idbenhvien]; ?>" method="POST" onsubmit="return validateForm()">
            <?php
            while ($row = mysqli_fetch_array($query_capnhat)) {
            ?>
                <h4>Cập nhật bệnh viện </h4>
                <!-- tên -->
                <div class="row col-12">
                    <div class="col-3">
                        <span class="">Tên bệnh viện</span>
                    </div>
                    <div class="col">
                        <div class="input-group form-group">
                            <input type="text" class="form-control pl-4" placeholder="Tên bệnh viện" value="<?php echo $row['ten'] ?>" name="ten" id="ten">
                        </div>
                    </div>
                </div>
                <!-- Mã -->
                <div class="row col-12">
                    <div class="col-3">
                        <span>Mã bệnh viện</span>
                    </div>
                    <div class="col">
                        <div class="input-group form-group">
                            <input type="text" class="form-control pl-4" value="<?php echo $row['mabenhvien'] ?>" name="mabenhvien" id="mabenhvien">
                        </div>
                    </div>
                </div>
                <!-- Địa chỉ -->
                <div class="row col-12">
                    <div class="col-3">
                        <span>Địa chỉ</span>
                    </div>
                    <!-- ~Tỉnh thành~ -->
                    <div class="col pl-4">
                        <select class="form-control pl-3" id="tinh" onchange="print_quan('quan',this.selectedIndex);" name="tinh" value="<?php echo $row['tinh'] ?>">
                            <option selected="selected" value="<?php echo $row['tinh'] ?>"><?php echo $row['tinh'] ?></option>
                        </select>
                    </div>
                    <!-- ~Quận/Huyện~ -->
                    <div class="col">
                        <select class="form-control pl-3" id="quan" onchange="print_phuong('phuong',this.selectedIndex);" name="quan" value="<?php echo $row['quan'] ?>">
                            <option selected="selected" value="<?php echo $row['quan'] ?>"><?php echo $row['quan'] ?></option>
                        </select>
                    </div>
                    <!-- ~Phường/Xã~ -->
                    <div class="col pr-4">
                        <select class="form-control pl-3" id="phuong" name="phuong" value="<?php echo $row['phuong'] ?>">
                            <option selected="selected" value="<?php echo $row['phuong'] ?>"><?php echo $row['phuong'] ?></option>
                        </select>
                    </div>
                </div>
                <!-- Địa chỉ -->
                <div class="row col-12 mt-3">
                    <div class="col-3">
                    </div>
                    <div class="col">
                        <div class="input-group form-group">
                            <input type="text" class="form-control pl-4" placeholder="Địa chỉ bệnh viện" value="<?php echo $row['diachi'] ?>" name="diachi" id="diachi">
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
                            <input type="text" class="form-control pl-4" value="<?php echo $row['sodienthoai'] ?>" name="sodienthoai" id="sodienthoai">
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
                            <input type="text" class="form-control pl-4" value="<?php echo $row['email'] ?>" name="email" id="email">
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
                                <option value="<?php echo $row['tang'] ?>"><?php echo "Tầng" . " " . $row['tang'] ?></option>
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
                            <input type="text" class="form-control pl-4" value="<?php echo $row['sobenhnhantiepnhan'] ?>" name="sobenhnhantiepnhan" id="sobenhnhantiepnhan">
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
                            <input type="text" class="form-control pl-4" value="<?php echo $row['sobenhnhandatiepnhan'] ?>" name="sobenhnhandatiepnhan" id="sobenhnhandatiepnhan">
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
                            <input type="text" class="form-control pl-4" value="<?php echo $row['sobenhnhancothetiepnhan'] ?>" name="sobenhnhancothetiepnhan" id="sobenhnhancothetiepnhan">
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center pr-2">
                    <button type="submit" class="btn btn-primary" name="Capnhatbenhvien"> Cập nhật bệnh viện </button>
                </div>
            <?php
            }
            ?>
        </form>
    </div>
</div>
<script language="javascript">
    print_tinh("tinh");
</script>