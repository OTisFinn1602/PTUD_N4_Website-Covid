
<?php
include("modules/comfig.php");
$sql_listTK="select * from tbl_taikhoan order by id_taikhoan desc";
$query_listTK=mysqli_query($con,$sql_listTK);
?>

<div class="container-fluid">
    <div class="pag-login d-flex align-items-center justify-content-center h-100">
        <div class="col-lg-12">
            <h4>Danh sách tài khoản</h4>
            <a href="admin.php?AddTK">
                <button class="btn btn-primary">
                    Thêm tài khoản
                </button>
            </a>
            <table class="table table-bordered table-light table-hover">
                <thead class="thead-dark">
                    <tr class="text-align-center">
                        <th scope="col">STT</th>
                        <th scope="col">Tên tài khoản</th>
                        <th scope="col">Chức vụ</th>
                        <th scope="col">Mật khẩu</th>
                        <th scope="col">Lựa chọn</th>
                    </tr>
                </thead>
                <tbody>
                <?php
				$i=0;
				while($row=mysqli_fetch_array($query_listTK))
				{
					$i++;
                ?>
                    <tr class="font-weight-bold">
                        <th scope="row"><?php echo $i;?></th>
                        <td><?php echo $row['ten'];?></td>
                        <td><?php echo $row['ChucVu'];?></td>
                        <td><?php echo $row['matkhau'];?></td>
                        <td>
                            <a href="admin.php?CNTK&idtaikhoan=<?php echo $row['id_taikhoan'];?>">Cập nhật</a> || 
                            <a href="./View/V_Views/modules/xulyTK.php?idtaikhoan=<?php echo $row['id_taikhoan'];?>">Xóa</a>
                        </td>
                    </tr>
                  <?php
				}
				  ?>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>