<script type="text/javascript">
function validateForm() {
        var tkbn = document.getElementById('tkbn').value;
        if (tkbn == "") {
            alert("Vui lòng điền thông tin tìm kiếm");
            return false;
        }
        else
        return true;
    }
</script>
<div class="container-fluid" style="height: 500px; margin-top: 100px;">
    <div class="pag-login d-flex align-items-center justify-content-center h-100">
        <form class="timkiem" action="benhvien.php?HTTKBN" method="post" onsubmit="return validateForm()">
            <h4 style="text-align:center">Tìm Kiếm Thông Tin Bệnh Nhân</h4>
            <div class="input-group form-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                </div>
                <input type="text" class="form-control pl-4" id="tkbn" placeholder="Nhập Tên hoặc Số điện thoại" name="thongtin">
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary" name="timkiembenhvien" >Tìm kiếm</button>
            </div>

            <div class="attention">
                <p class="text2">CHÚ Ý: Nhập tên bệnh nhân hoặc số điện thoại</p>
            </div>
        </form>
    </div>
</div>