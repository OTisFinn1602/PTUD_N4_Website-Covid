<?php {
    include('modules/comfig.php');
    $sql_benhnhan = "select * from tbl_benhnhan";
    $query_benhnhan = mysqli_query($con, $sql_benhnhan);
}
?>
<div class="container-fluid">
    <div class="pag-login d-flex align-items-center justify-content-center h-100">
        <div class="col-lg-12">
            <form class="capnhatttbn" action="benhvien.php?TTBN" method="post">
                <h4>Cập nhật tình trạng bệnh nhân</h4>
                <table class="table table-bordered table-light table-hover">
                    <thead class="thead-dark">
                        <tr class="text-align-center">
                            <th scope="col">STT</th>
                            <th scope="col">Tên Bệnh Nhân</th>
                            <th scope="col">Số điện thoại</th>
                            <th scope="col">Tình trạng bệnh</th>
                            <th scope="col">Tầng</th>
                            <th scope="col">Cập nhật tình trạng bệnh</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 0;
                        while ($row = mysqli_fetch_array($query_benhnhan)) {
                            $i++;
                        ?>
                            <tr class="font-weight-bold">
                                <td scope="row"><a href="BenhVien.php?CNSK&idbenhnhan=<?php echo $row['id_benhnhan']; ?>"><?php echo $i; ?> </a> </td>
                                <td><a href="BenhVien.php?CNSK&idbenhnhan=<?php echo $row['id_benhnhan']; ?>"><?php echo $row['hovaten']; ?></a></td>
                                <td><a href="BenhVien.php?CNSK&idbenhnhan=<?php echo $row['id_benhnhan']; ?>"><?php echo $row['sodienthoai'] ?></a></td>
                                <td><a href="BenhVien.php?CNSK&idbenhnhan=<?php echo $row['id_benhnhan']; ?>"><?php echo $row['trieuchung']; ?></a></td>
                                <td><a href="BenhVien.php?CNSK&idbenhnhan=<?php echo $row['id_benhnhan']; ?>"><?php echo $row['tang']; ?></a></td>
                                <td><a href="BenhVien.php?CNSK&idbenhnhan=<?php echo $row['id_benhnhan']; ?>"><?php
                                                                                                                if ($row['tinhtrang'] == 0) {
                                                                                                                    echo 'Đang điều trị';
                                                                                                                } else {
                                                                                                                    echo 'Đã xuất viện';
                                                                                                                }
                                                                                                                ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                </table>
        </div>
        </from>
    </div>
</div>
</div>