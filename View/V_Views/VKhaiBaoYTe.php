<link rel="stylesheet" type="text/css" href="../../css/style.css">
<script type="text/javascript">
    ///////////////////////////////////////////////////////////////////////////////////////////////////
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

    function validateForm() {
        var ten = document.getElementById('inputName').value;
        var tsdt = document.getElementById('inputSDT').value;
        var tcccd = document.getElementById('inputCCCD').value;
        var tbhyt = document.getElementById('inputSTYT').value;
        var temail = document.getElementById('inputEmail').value;
        var tgt = document.getElementById('selectGender').value;
        var tngay = document.getElementById('inputDate').value;
        var ttinh = document.getElementById('tinh').value;
        var tquan = document.getElementById('quan').value;
        var tphuong = document.getElementById('phuong').value;
        if (ten == "") {
            alert("Vui lòng điền họ và tên");
            return false;
        }
        if (tsdt == "") {
            alert("Vui lòng điền số điện thoại");
            return false;
        }
        if (tcccd == "") {
            alert("Vui lòng điền thông tin căn cước công dân");
            return false;
        }
        if (tbhyt == "") {
            alert("Vui lòng điền thông tin báo hiểm y tế");
            return false;
        }
        if (temail == "") {
            alert("Vui lòng điền địa chỉ email");
            return false;
        }
        if (tgt == "") {
            alert("Vui lòng chọn giới tính");
            return false;
        }
        if (tngay == "") {
            alert("Vui lòng chọn ngày sinh");
            return false;
        }
        if (ttinh == "") {
            alert("Vui lòng chọn tỉnh");
            return false;
        }
        if (tquan == "") {
            alert("Vui lòng chọn quận");
            return false;
        }
        if (tphuong == "") {
            alert("Vui lòng chọn phường");
            return false;
        } else
            alert("Khai báo thành công")

        return true;
    }
</script>
<div style="margin-top: 100px;" class="container-fluid">
    <div class="pag-login d-flex align-items-center justify-content-center h-100">
        <div class="col-lg-10 left">
            <h4>khai báo y tế</h4>
            <div class="info">
                <div class="attention">
                    <p class="text1"><b>Nguồn:</b>
                        <a href="">Hướng dẫn tờ khai y tế; Mẫu tờ khai y tế</a>
                    </p>

                </div>
                <form action="index.php?HTKBYT" method="POST" onsubmit="return validateForm()">
                    <h4 class="title-form">thông tin cá nhân</h4>

                    <!-- ~Thông tin cá nhân~ -->
                    <div class="row col-12 inf-Per">
                        <!-- inf-Per: Thông tin cá nhân -->
                        <div class="col-6">
                            <!-- Name -->
                            <div class="form-group">
                                <label for="inputName">Họ và Tên</label>
                                <label id="ert" style="color:red">(*) </label>
                                <input type="text" class="form-control pl-4" id="inputName" placeholder="Nguyen Van A " onblur="ktten()" name="hovaten">
                            </div>
                            <!-- CCCD -->
                            <div class="form-group">
                                <label for="inputCCCD">CMND/CCCD/Hộ chiếu</label>
                                <label id="erc" style="color:red"> (*)</label>
                                <input type="text" class="form-control pl-4" id="inputCCCD" placeholder="033201009999" onblur="ktcccd()" name="cccd">
                            </div>
                            <!-- Gender -->
                            <div class="form-group">
                                <label for="selectGender">Giới tính</label>
                                <label id="ergt" style="color:red"> (*)</label>
                                <select class="form-control pl-4" id="selectGender" onchange="ktgt()" name="gioitinh">
                                    <option value="">Chọn</option>
                                    <option value="Nam">Nam</option>
                                    <option value="Nữ">Nữ</option>
                                </select>
                            </div>
                            <!-- Date -->
                            <div class="form-group">
                                <label for="inputDate">Ngày tháng năm sinh</label>
                                <label id="ern" style="color:red"> (*)</label>
                                <input type="date" class="form-control pl-4" id="inputDate" name="ngaysinh">
                            </div>
                        </div>
                        <div class="col-6">
                            <!-- NumberPhone -->
                            <div class="form-group">
                                <label for="inputSDT">Điện thoại</label>
                                <label id="ersdt" style="color:red"> (*)</label>
                                <input type="text" class="form-control pl-4" id="inputSDT" placeholder="0792229999" onblur="ktsdt()" name="sodienthoai">
                            </div>
                            <!-- Số thẻ y tế -->
                            <div class="form-group">
                                <label for="inputSTYT">Số thẻ y tế</label>
                                <label id="erb" style="color:red"> (*)</label>
                                <input type="text" class="form-control pl-4" id="inputSTYT" placeholder="SV1234567891011" onblur="ktbhyt()" name="bhyt">
                            </div>
                            <!-- Email -->
                            <div class="form-group">
                                <label for="inputEmail">Email</label><label id="ere" style="color:red"> (*)</label>
                                <input type="text" class="form-control pl-4" id="inputEmail" placeholder="Email" onblur="ktemail()" name="email">
                            </div>
                        </div>
                    </div>

                    <!-- ~Nơi cư trú~ -->
                    <h4 class="title-form">Nơi cư trú</h4>
                    <div class="row col-12">
                        <div class="col-4">
                            <label for="tinh">Tỉnh thành</label>
                            <label id="" style="color:red">(*)</label>
                            <select class="form-control pl-4" onchange="print_quan('quan',this.selectedIndex);" id="tinh" name="tinh">

                            </select>
                        </div>
                        <div class="col-4">
                            <label for="quan">Quận / huyện</label>
                            <label id="" style="color:red">(*)</label>
                            <select class="form-control pl-4" onchange="print_phuong('phuong',this.selectedIndex);" id="quan" name="quan">

                            </select>
                        </div>
                        <div class="col-4">
                            <label for="phuong">Phường / xã</label>
                            <label id="" style="color:red">(*)</label>
                            <select class="form-control pl-4" id="phuong" name="phuong">
                            </select>
                        </div>
                    </div>
                    <div class="row col-12">
                        <div class="col-12">
                            <label for="inputadd">Số nhà, phố, tổ dân phố/thôn/đội</label>
                            <label id="erdc" style="color:red">(*)</label>
                            <input type="text" class="form-control pl-4" id="inputadd" placeholder="Số nhà, phố, tổ dân phố/thôn/đội" name="diachi">
                        </div>
                    </div>
                    <script language="javascript">
                        print_tinh("tinh");
                    </script>
                    <!-- ~Triệu chứng~ -->
                    <h4 class="title-form">Triệu chứng</h4>
                    <div class="row col-12">
                        <div class="col-12">
                            <label for="inputadd">Triệu chúng gặp phải</label>
                            <input type="text" class="form-control pl-4" id="trieuchung" placeholder="Ho, sốt, khó thở" name="trieuchung">
                        </div>
                    </div>

                    <!-- ~Submit~ -->
                    <p class="text2" style="color:red">(*)Cảnh báo: Mọi thông tin khai báo, người khai báo sẽ chịu toàn bộ trách nhiêm</p>
                    <button type="submit" class="btn btn-primary KBYT" name='khaibaoyte'>Gửi khai báo</button>
                </form>
            </div>
        </div>
    </div>
</div>