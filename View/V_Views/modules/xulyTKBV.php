<?php
include("comfig.php");
$thongtinbv=$_POST['thongtinbv'];
$thongtintinh=$_POST['tinh'];
$thongtinquan=$_POST['quan'];
if(isset($_POST['timkiembv']))
{
	$sql_timkiembv="select * from tbl_benhvien where mabenhvien='".$thongtinbv."' or ten like '%".$thongtinbv."%'";
	$query_tkbv=mysqli_query($con,$sql_timkiembv);
}
if(isset($_POST['timkiemtrangchu']))
{
	$sql_timkiembv="select * from tbl_benhvien where mabenhvien='".$thongtinbv."' or ten like '%".$thongtinbv."%'";
	$query_tkbv=mysqli_query($con,$sql_timkiembv);
}
if(isset($_POST['timkiembenhvien']))
{
	$sql_timkiembv="select * from tbl_benhvien where mabenhvien='".$thongtinbv."' or ten like '%".$thongtinbv."%'";
	$query_tkbv=mysqli_query($con,$sql_timkiembv);
}
if(isset($_POST['loc']))
{
	$sql_timkiembvl="select * from tbl_benhvien where tinh='".$thongtintinh."' and quan='".$thongtinquan."'";
	$query_tkbv=mysqli_query($con,$sql_timkiembvl);
}
if(isset($_POST['loctrangchu']))
{
	$sql_timkiembvl="select * from tbl_benhvien where tinh='".$thongtintinh."' and quan='".$thongtinquan."'";
	$query_tkbv=mysqli_query($con,$sql_timkiembvl);
}
if(isset($_POST['locbenhvien']))
{
	$sql_timkiembvl="select * from tbl_benhvien where tinh='".$thongtintinh."' and quan='".$thongtinquan."'";
	$query_tkbv=mysqli_query($con,$sql_timkiembvl);
}
?>
<h3>Từ khóa tìm kiếm: <?php echo $thongtinbv; echo $thongtinquan." ".$thongtintinh;  ?></h3>
    <div>
    <table class="table table-bordered table-light table-hover">
                <thead class="thead-dark">
                    <tr class="text-align-center">
                        <th scope="col">STT</th>
                        <th scope="col">Mã bệnh viên</th>
                        <th scope="col">Tên bệnh viện</th>
                        <th scope="col">Đia chỉ</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $i=0;
				while($row=mysqli_fetch_array($query_tkbv))
				{
					$i++;
                ?>
                    <tr class="font-weight-bold">
                        <th scope="row"><?php echo $i;?></th>
                        <td><?php echo $row['mabenhvien'];?></td>
                        <td><?php echo $row['ten'];?></td>
                        <td><?php echo $row['diachi'].",".$row['phuong'].",".$row['quan'].",".$row['tinh'];?></td>
                        <td>
                        <?php
                        if(isset($_POST['timkiembv'])||isset($_POST['loc']))
                        {
                        ?>
                            <a href="admin.php?HTCTTKBV&idbenhvien=<?php echo $row['id_benhvien'];?>">Xem</a>
                        <?php
                        }elseif(isset($_POST['timkiemtrangchu'])||isset($_POST['loctrangchu']))
                        {
                        ?>
                            <a href="index.php?search&HTCTTKBV&idbenhvien=<?php echo $row['id_benhvien'];?>">Xem</a>
                        <?php
                        }else{
                        ?>
                        <a href="benhvien.php?HTCTTKBV&idbenhvien=<?php echo $row['id_benhvien'];?>">Xem</a>
                        <?php
                        }
                        ?>
                        </td>
                    </tr>
                  <?php
				}
                if($i==0)
                {
                    echo "<h5 style='color:red;'>Không tim thấy bệnh viện</h5>";
                }
				  ?>
                    
                </tbody>
            </table>
    </div>