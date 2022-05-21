<?php
include_once("Controller/cHoTroBenhNhan.php");
$p = new controlHTBN();
$tblHTBN = $p->getAllHTBN();
?>
<div class="container-fluid">
    <div class="pag-login d-flex align-items-center justify-content-center h-100">
        <div class="col-lg-12">
            <h4>Hỗ trợ chăm sóc bệnh nhân</h4>
            <?php
            if ($tblHTBN) {
                if (mysqli_num_rows($tblHTBN) > 0) {
                    $stt = 0;
                    echo '
                    <table class="table table-bordered table-light table-hover">
                        <thead class="thead-dark">
                            <tr class="text-align-center">
                                <th scope="col">Mã Phiếu</th>
                                <th scope="col">Mã Bệnh Nhân</th>
                                <th scope="col">Tên Bệnh Nhân</th>
                                <th scope="col">Nội Dung</th>
                                <th scope="col" colspan="2">Reply</th>                               
                            </tr>
                        </thead>
                        <tbody>
                                ';
                    while ($row = mysqli_fetch_assoc($tblHTBN)) {
                        if ($stt == 0) {
                            echo '<tr class="font-weight-bold">';
                        }
                        $a = $row['idbenhnhan'];
                        include_once("Controller/cBenhNhan.php");
                        $p = new controlBenhNhan();
                        $tblBenhNhan = $p->getBenhNhan($a);
                        $rowBN = mysqli_fetch_assoc($tblBenhNhan);
                        if($checkTN != $rowBN['id_benhnhan']){
                        echo '
                        <td>' . $row['id_phieutv'] . '</td>
                        <td>' . $rowBN['id_benhnhan'] . '</td>
                        <td>' . $rowBN['hovaten'] . '</td>
                        <td>Tin nhắn chờ ...</td>
                        <td><a href="BenhVien.php?reply&idBN=' . $row["idbenhnhan"] . '">trả lời</a></td>
                        <td><a href="BenhVien.php?del&idP=' . $row["id_phieutv"] . '">xóa</a></td>
                        ';}
                        $stt++;                        
                        if ($stt % 1 == 0) {
                            echo '</tr>';
                            $stt = 0;
                            $checkTN = $rowBN['id_benhnhan'];
                        }
                    }
                    echo '
                        </tbody>
                        </table>
                    ';
                } else {
                    echo '0 Result';
                }
            } else {
                echo 'ERROR';
            }
            
            ?>
        </div>
    </div>
</div>
<?php
?>