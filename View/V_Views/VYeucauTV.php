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
</script>
<div class="container-fluid">
    <div class="pag-login d-flex align-items-center justify-content-center h-100">
        <div class="col-lg-10 center">
            <h4>YÊU CẦU TƯ VẤN</h4>
            <p></p>
            <div class="info">
                <form action="#" method="post">
                    <!-- ~Thông tin cá nhân~ -->
                    <div class="row col-12 inf-Per">
                        <!-- inf-Per: Thông tin cá nhân -->
                        <div class="col-6">
                            <!-- Name -->
                            <div class="form-group">
                                <label for="inputName">Họ và Tên</label>
                                <label id="ert" style="color:red">(*) </label>
                                <input type="text" class="form-control pl-4" id="inputName" placeholder="Nguyen Van A " onblur="ktten()">
                            </div>
                            <!-- email -->
                            <div class="form-group">
                                <label for="inputSDT">Điện thoại</label>
                                <label id="ersdt" style="color:red"> (*)</label>
                                <input type="text" class="form-control pl-4" id="inputSDT" placeholder="0905098726" onblur="ktsdt()">
                            </div>
                            <div class="form-group">
                                <label for="inputDate">Ngày tháng năm sinh</label>
                                <label id="ern" style="color:red"> (*)</label>
                                <input type="date" class="form-control pl-4" id="inputDate">
                            </div>
                        </div>

                        <div class="col-6">
                            <!-- NumberPhone -->

                            <div class="form-group">
                                <label for="selectGender">Giới tính</label>
                                <label id="" style="color:red"> (*)</label>
                                <select class="form-control pl-4" id="selectGender">
                                    <option value="Nam">Nam</option>
                                    <option value="Nu">Nữ</option>
                                </select>
                            </div>

                            <!-- Email -->
                            <div class="form-group">
                                <label for="inputEmail">Email</label>
                                <label id="eremail" style="color:red"></label>
                                <input type="text" class="form-control pl-4" id="inputEmail" placeholder="nguyena@gmail.com" onblur="ktemail()">
                            </div>
                        </div>
                    </div>

                    <!-- ~Nơi cư trú~ -->


                    <div class="row col-12">
                        <div class="col-4">
                            <label for="tinh">Tỉnh thành</label>
                            <label id="" style="color:red">(*)</label>
                            <select class="form-control pl-4" onchange="print_quan('quan',this.selectedIndex);" id="tinh">

                            </select>
                        </div>
                        <div class="col-4">
                            <label for="quan">Quận / huyện</label>
                            <label id="" style="color:red">(*)</label>
                            <select class="form-control pl-4" onchange="print_phuong('phuong',this.selectedIndex);" id="quan">

                            </select>
                        </div>
                        <div class="col-4">
                            <label for="phuong">Phường / xã</label>
                            <label id="" style="color:red">(*)</label>
                            <select class="form-control pl-4" id="phuong">
                            </select>
                        </div>
                    </div>
                    <div class="row col-12 inf-Per">
                        <!-- inf-Per: Thông tin cá nhân -->
                        <div class="col-6">
                            <!-- Name -->
                            <div class="form-group">
                                <label for="inputND"> Nội dung</label>
                                <label id="erND" style="color:red">(*) </label>
                                <textarea rows="10" cols="99" onblur="ktnd()"></textarea>
                            </div>
                        </div>
                    </div>


                    <script language="javascript">
                        print_tinh("tinh");
                    </script>

                    <p></p>

                    <!-- ~Submit~ -->
                    <button type="submit" class="btn btn-primary KBYT ">Gửi yêu cầu</button>
                </form>
            </div>
        </div>
    </div>
</div>