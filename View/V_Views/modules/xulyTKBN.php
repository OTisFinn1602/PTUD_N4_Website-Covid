<?php
include("comfig.php");
$thongtin=$_POST['thongtin'];
if(isset($_POST['timkiemadmin']))
{
	$sql_timkiembn="select * from tbl_benhnhan where sodienthoai='".$thongtin."' or hovaten like '%".$thongtin."%'";
	$query_tkbn=mysqli_query($con,$sql_timkiembn);
}
elseif(isset($_POST['timkiemtrangchu']))
{
	$sql_timkiembn="select * from tbl_benhnhan where sodienthoai='".$thongtin."'";
	$query_tkbn=mysqli_query($con,$sql_timkiembn);
}
elseif(isset($_POST['timkiembenhvien']))
{
	$sql_timkiembn="select * from tbl_benhnhan where sodienthoai='".$thongtin."' or hovaten like '%".$thongtin."%'";
	$query_tkbn=mysqli_query($con,$sql_timkiembn);
}
?>
<h3>Từ khóa tìm kiếm: <?php echo $thongtin;  ?></h3>
    <div>
    <table class="table table-bordered table-light table-hover">
                <thead class="thead-dark">
                    <tr class="text-align-center">
                        <th scope="col">STT</th>
                        <th scope="col">Tên bệnh nhân</th>
                        <th scope="col">Số điện thoại</th>
                        <th scope="col">Đia chỉ</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                <?php
				$i=0;
				while($row=mysqli_fetch_array($query_tkbn))
				{
					$i++;  
                ?>
                    <tr class="font-weight-bold">
                        <th scope="row"><?php echo $i;?></th>
                        <td><?php echo $row['hovaten'];?></td>
                        <td><?php echo $row['sodienthoai'];?></td>
                        <td><?php echo $row['diachi'].",".$row['phuong'].",".$row['quan'];?></td>
                        <td>
                            <?php
                        if(isset($_POST['timkiemadmin']))
                        {
                            ?>
                            <a href="admin.php?HTCTTK&idbenhnhan=<?php echo $row['id_benhnhan'];?>">Xem</a>
                            <?php
                        }elseif(isset($_POST['timkiembenhvien']))
                        {
                            ?>
                            <a href="benhvien.php?CNSK&idbenhnhan=<?php echo $row['id_benhnhan'];?>">Xem</a>
                            <?php
                        }else
                        {
                            ?>
                            <a href="index.php?HTCTTKTT&idbenhnhan=<?php echo $row['id_benhnhan'];?>">Xem</a>
                            <?php
                            }
                            ?>
                        </td>
                    </tr>
                  <?php
				}
                if($i==0)
                {
                    echo "<h4 style='color:red;'>Không tim thấy bệnh nhân</h4>";
                }
				  ?>
                    
                </tbody>
            </table>
    </div>
