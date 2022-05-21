
<?php
include("modules/comfig.php");
$sql_VQuanlyBN="select * from tbl_benhnhan order by id_benhnhan desc";
$query_VQuanlyBN=mysqli_query($con,$sql_VQuanlyBN);
?>

<div class="container-fluid">
    <div class="pag-login d-flex align-items-center justify-content-center h-100">
        <div class="col-lg-12">
            <h4>Danh sách bệnh nhân</h4>
            <table class="table table-bordered table-light table-hover">
                <thead class="thead-dark">
                    <tr class="text-align-center">
                        <th scope="col">STT</th>
                        <th scope="col">Tên bệnh nhân</th>
                        <th scope="col">Số điện thoại</th>
                        <th scope="col">Căn cước công dân</th>
                        <th scope="col">Giới tính</th>
                        <th scope="col">Email</th>
                        <th scope="col">Ngày sinh</th>
                        <th scope="col">Địa chỉ</th>
                       
                        <th scope="col">Số tầng</th>
                       
                        <th scope="col">Lựa chọn</th>
                    </tr>
                </thead>
                <tbody>
                <?php
				$i=0;
				while($row=mysqli_fetch_array($query_VQuanlyBN))
				{
					$i++;
                ?>
                    <tr class="font-weight-bold">
                        <th scope="row"><?php echo $i;?></th>
                        <td><?php echo $row['hovaten'];?></td>
                        <td><?php echo $row['sodienthoai'];?></td>
                        <td><?php echo $row['cccd'];?></td>
                        <td><?php echo $row['gioitinh'];?></td>
                        <td><?php echo $row['email'];?></td>
                        <td><?php echo $row['ngaysinh'];?></td>
                        <td><?php echo $row['diachi'];?></td>
                        <td><?php echo $row['tang'];?></td>
                        <td>
                            <a href="admin.php?CNBN&idbenhnhan=<?php echo $row['id_benhnhan'];?>">Cập nhật</a> 
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