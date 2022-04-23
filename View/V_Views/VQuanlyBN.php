<style type="text/css">
.container-fluid .pag-login.d-flex.align-items-center.justify-content-center.h-100 .col-lg-10.left h4 {
	font-weight: bold;
}
</style>

<div class="container-fluid" style="margin-top: 100px;">
    <div class="pag-login d-flex align-items-center justify-content-center h-100">
        <div class="col-lg-10 left">
            <h4>Quản lý bệnh nhân</h4>
            <div class="info">
                <div class="attention">
                    <p class="text2">&nbsp;</p>
                </div>
              <form action="#" method="post">
                            <!-- Name -->
                            <div class="form-group">
                                <label for="inputName">Họ Tên (ghi chữ IN HOA)</label>
                                <input type="text" class="form-control pl-4" id="inputName" placeholder="Họ Tên (ghi chữ IN HOA)">
                            </div>
                            <!-- Date -->
                            <div class="form-group">
                                <label for="inputDate">Ngày tháng năm sinh</label>
                                <input type="date" class="form-control pl-4" id="inputDate">
                            </div>
                            <!-- ~Địa chỉ~ -->
                            <div class="form-group">
                            	<label for="inputAdd">Địa chỉ</label>
                                <input type="text" class="form-control pl-4" id="inputAdd" placeholder="Số nhà, tên đường">
                            </div>
                            <!-- ~Tỉnh thành~ -->
                            <div class="form-group">
                            	<label for="selectTinh">Tỉnh thành</label>
                            	<select class="form-control pl-4" id="selectTinh">
                                	<option value="">TP.Hồ Chí Minh</option>
                                	<option value="">Đồng Nai</option>
                                	<option value="">Bình Dương</option>
                                    <option value="">Tây Ninh</option>
                                    <option value="">Long An</option>
                                    <option value="">Tỉnh thành khác</option>
                            	</select>
                            </div>
                            <!-- ~Quận/Huyện~ -->
                            <div class="form-group">
                            	<label for="selectQuan">Quận / huyện</label>
                            	<select class="form-control pl-4" id="selectQuan">
                                	<option value="">Quận 1</option>
                               		<option value="">Quận 3</option>
                               	 	<option value="">Quận 4</option>
                                	<option value="">Quận 5</option>
                                	<option value="">Quận 6</option>
                                	<option value="">Quận 7</option>
                                	<option value="">Quận 8</option>
                                	<option value="">Quận 10</option>
                                    <option value="">Quận 11</option>
                                    <option value="">Quận 12</option>
                                    <option value="">TP.Thủ Đức</option>
                                    <option value="">Quận Gò Vấp</option>
                                    <option value="">Quận Bình Thạnh</option>
                                    <option value="">Quận Bình Tân</option>
                                    <option value="">Quận Tân Bình</option>
                                    <option value="">Quận Phú Nhuận</option>
                                    <option value="">Quận Tân Phú</option>
                                    <option value="">H.Hóc Môn</option>
                                    <option value="">H.Củ Chi</option>
                                    <option value="">H.Cần Giờ</option>
                                    <option value="">H.Bình Chánh</option>
                                    <option value="">H.Nhà Bè</option>
                            	</select>
                            </div>
                            <!-- ~Phường/Xã~ -->
                            <div class="form-group">
                            	<label for="selectPhuong">Phường / xã</label>
                            	<select class="form-control pl-4" id="selectPhuong">
                                	<option value="">Phường 1</option>
                                	<option value="">Phường 2</option>
                                	<option value="">Phường 3</option>
                                    <option value="">Phường 4</option>
                                    <option value="">Phường 5</option>
                                    <option value="">Phường 6</option>
                                    <option value="">....</option>
                            	</select>
                            </div>
     						<!-- NumberPhone -->
                            <div class="form-group">
                                <label for="inputSDT">Số điện thoại</label>
                                <input type="text" class="form-control pl-4" id="inputSDT" placeholder="Điện thoại">
                            </div>
                            <!-- CCCD -->
                            <div class="form-group">
                                <label for="inputCCCD">CMND/CCCD/Hộ chiếu</label>
                                <input type="text" class="form-control pl-4" id="inputCCCD" placeholder="CMND/CCCD/Hộ chiếu">
                            </div>
                            <!-- Mã bệnh nhân -->
                            <div class="form-group">
                            	<label for="inputMabenhnhan">Mã bệnh nhân</label>
                                <input type="text" class="form-control pl-4" id="inputMabenhnhan" placeholder="Mã bệnh nhân">
                            </div>
                            <!-- Số tầng -->
                            <div class="form-group">
                            	<label for="selectSotang">Số tầng</label>
                            	<select class="form-control pl-4" id="selectSotang">
                                	<option value="">Tầng 1</option>
                                	<option value="">Tầng 2</option>
                                	<option value="">Tầng 3</option>
                                    <option value="">Tầng 4</option>
                                    <option value="">Tầng </option>
                            	</select>
                             </div>
                            	<!-- Tình trạng -->                           
                            <div class="form-group">
                            	<label for="selectTinhtrang">Tình trạng</label>
                            	<select class="form-control pl-4" id="selectTinhtrang">
                                	<option value="">Đang điều trị</option>
                                	<option value="">Đã khỏi bệnh</option>
                            	</select>
                            </div>
                    <button type="submit" class="btn btn-primary QLBN">Thêm</button>
                     
                    <button type="submit" class="btn btn-primary QLBN">Sửa</button>
                </form>
            </div>
        </div>
    </div>
</div>

