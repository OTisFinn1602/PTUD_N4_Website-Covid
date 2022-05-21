
<?php
include("modules/comfig.php");
$sql_VQuanlyBV="select * from tbl_benhvien order by id_benhvien desc";
$query_VQuanlyBV=mysqli_query($con,$sql_VQuanlyBV);
?>

<div class="container-fluid">
    <div class="pag-login d-flex align-items-center justify-content-center h-100">
        <div class="col-lg-12">
            <h4>Danh sách bệnh viện</h4>
            <a href="admin.php?AddBV">
                <button class="btn btn-primary">
                    Thêm bệnh viện
                </button>
            </a>
            <table class="table table-bordered table-light table-hover">
                <thead class="thead-dark">
                    <tr class="text-align-center">
                        <th scope="col">STT</th>
                        <th scope="col">Tên bệnh viện</th>
                        <th scope="col">Mã bệnh viện</th>
                        <th scope="col">Địa chỉ</th>
                        <th scope="col">Số điện thoại</th>
                        <th scope="col">Email</th>
                        <th scope="col">Số tầng</th>
                        <th scope="col">Số bệnh nhân tiếp nhận</th>
                        <th scope="col">Số bệnh nhân đang điều trị</th>
                        <th scope="col">Số bệnh nhân có thể tiếp nhận thêm</th>
                        <th scope="col">Lựa chọn</th>
                    </tr>
                </thead>
                <tbody>
                <?php
				$i=0;
				while($row=mysqli_fetch_array($query_VQuanlyBV))
				{
					$i++;
                ?>
                    <tr class="font-weight-bold">
                        <th scope="row"><?php echo $i;?></th>
                        <td><?php echo $row['ten'];?></td>
                        <td><?php echo $row['mabenhvien'];?></td>
                        <td><?php echo $row['diachi'];?></td>
                        <td><?php echo $row['sodienthoai'];?></td>
                        <td><?php echo $row['email'];?></td>
                        <td><?php echo $row['tang'];?></td>
                        <td><?php echo $row['sobenhnhantiepnhan'];?></td>
                        <td><?php echo $row['sobenhnhandatiepnhan'];?></td>
                        <td><?php echo $row['sobenhnhancothetiepnhan'];?></td>
                        <td>
                            <a href="admin.php?CNBV&idbenhvien=<?php echo $row['id_benhvien'];?>">Cập nhật</a> || <a href="./View/V_Views/modules/xulyBV.php?idbenhvien=<?php echo $row['id_benhvien'];?>">Xóa</a>
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