<?php
include("modules/comfig.php");
$sql_xacnhanyccv="select * from tbl_benhnhan,tbl_benhvien,tbl_phieuchuyenvien where 
tbl_benhnhan.id_benhnhan=tbl_phieuchuyenvien.id_benhnhan and tbl_benhvien.id_benhvien=tbl_phieuchuyenvien.id_benhvien order by id_PCV desc";
$query_xacnhanyccv=mysqli_query($con,$sql_xacnhanyccv);
?>
<div class="container-fluid">
    <div class="pag-login d-flex align-items-center justify-content-center h-100">
        <div class="col-lg-12">
            <h4>Yêu cầu chuyển viện</h4>
            
            <table class="table table-bordered table-light table-hover">
                <thead class="thead-dark">
                    <tr class="text-align-center">
                        <th scope="col">STT</th>
                        <th scope="col">Tên bệnh nhân</th>
                        <th scope="col">Tên bệnh viện</th>
                        <th scope="col">Tầng muốn chuyển </th>
                        <th scope="col">Lưu ý </th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                <?php
				$i=0;
				while($row=mysqli_fetch_array($query_xacnhanyccv))
				{
					$i++;
                ?>
                    <tr class="font-weight-bold">
                        <th scope="row"><?php echo $i;?></th>
                        <td><?php echo $row['hovaten'];?></td>
                        <td><?php echo $row['ten'];?></td>
                        <td>Tầng <?php echo $row['tangcv'];?></td>
                        <td>
                        <?php 
                        if($row['xacnhan']==0)
                        {
                            echo "<span style='color:red;'>Chưa xác nhận</span>";
                        }
                        elseif($row['xacnhan']==1)
                        {
                            echo "Đã Chuyển";
                        }elseif($row['xacnhan']==2)
                        {
                            echo "Đã hủy";
                        };
                        ?>
                        </td>
                        <td>
                            <a href="benhvien.php?CTYCCV&idPCV=<?php echo $row['id_PCV']?>">Xem</a>
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