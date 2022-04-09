<div class="container-fluid">
    <div class="pag-login d-flex align-items-center justify-content-center h-100">
        <div class="col-lg-10 left">
            <h4>khai báo y tế</h4>
            <div class="info">
                <div class="attention">
                    <p class="text1"><b>Nguồn:</b>
                        <a href="">Hướng dẫn tờ khai y tế; Mẫu tờ khai y tế</a>
                    </p>
                    <p class="text2">Khuyến cáo: Khai báo thông tin sai là vi phạm pháp luật Việt Nam và có thể sử phạt hình sự</p>
                </div>
                <form action="#" method="post">
                    <h4 class="title-form">thông tin cá nhân</h4>

                    <!-- ~Thông tin cá nhân~ -->
                    <div class="row col-12 inf-Per">
                        <!-- inf-Per: Thông tin cá nhân -->
                        <div class="col-6">
                            <!-- Name -->
                            <div class="form-group">
                                <label for="inputName">Họ Tên (ghi chữ IN HOA)</label>
                                <input type="text" class="form-control pl-4" id="inputName" placeholder="Họ Tên (ghi chữ IN HOA)">
                            </div>
                            <!-- CCCD -->
                            <div class="form-group">
                                <label for="inputCCCD">CMND/CCCD/Hộ chiếu</label>
                                <input type="text" class="form-control pl-4" id="inputCCCD" placeholder="CMND/CCCD/Hộ chiếu">
                            </div>
                            <!-- Gender -->
                            <div class="form-group">
                                <label for="selectGender">Giới tính</label>
                                <select class="form-control pl-4" id="selectGender">
                                    <option value="Nam">Nam</option>
                                    <option value="Nu">Nữ</option>
                                </select>
                            </div>
                            <!-- Date -->
                            <div class="form-group">
                                <label for="inputDate">Ngày tháng năm sinh</label>
                                <input type="date" class="form-control pl-4" id="inputDate">
                            </div>
                        </div>

                        <div class="col-6">
                            <!-- NumberPhone -->
                            <div class="form-group">
                                <label for="inputSDT">Điện thoại</label>
                                <input type="text" class="form-control pl-4" id="inputSDT" placeholder="Điện thoại">
                            </div>
                            <!-- Số thẻ y tế -->
                            <div class="form-group">
                                <label for="inputSTYT">Số thẻ y tế</label>
                                <input type="text" class="form-control pl-4" id="inputSTYT" placeholder="Số thẻ y tế">
                            </div>
                            <!-- Email -->
                            <div class="form-group">
                                <label for="inputEmail">Email</label>
                                <input type="text" class="form-control pl-4" id="inputEmail" placeholder="Email">
                            </div>
                        </div>
                    </div>

                    <!-- ~Nơi cư trú~ -->
                    <h4 class="title-form">Nơi cư trú</h4>
                    <div class="row col-12">
                        <div class="col-4">
                            <label for="selectTinh">Tỉnh thành</label>
                            <select class="form-control pl-4" id="selectTinh">
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                            </select>
                        </div>
                        <div class="col-4">
                            <label for="selectQuan">Quận / huyện</label>
                            <select class="form-control pl-4" id="selectQuan">
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                            </select>
                        </div>
                        <div class="col-4">
                            <label for="selectPhuong">Phường / xã</label>
                            <select class="form-control pl-4" id="selectPhuong">
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                            </select>
                        </div>
                    </div>
                    <div class="row col-12">
                        <div class="col-12">
                            <label for="inputadd">Số nhà, phố, tổ dân phố/thôn/đội</label>
                            <input type="text" class="form-control pl-4" id="inputadd" placeholder="Số nhà, phố, tổ dân phố/thôn/đội">
                        </div>
                    </div>

                    <!-- ~Triệu chứng~ -->
                    <h4 class="title-form">Triệu chứng</h4>
                    <div class="row col-12">
                        <div class="col-12">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="check1">
                                <label for="check1">Ho</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="check2">
                                <label for="check2">Sốt</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="check3">
                                <label for="check3">Khó thở</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="check4">
                                <label for="check4">Đau họng</label>
                            </div>
                        </div>
                    </div>

                    <!-- ~Submit~ -->
                    <button type="submit" class="btn btn-primary KBYT">Gửi khai báo</button>
                </form>
            </div>
        </div>
    </div>
</div>