<div style="margin-top: 100px;" class="flex-wrap d-flex justify-content-center mb-3">
    <div class="row col-12 p-0 m-0">
        <div class="col-12 p-0">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="./images/1.jpg" height="500" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="./images/2.jpg" height="500" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="./images/3.png" height="500" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="main flex-wrap d-flex justify-content-center">
        <h2>
            ----------------------------------*_*---------------------------------- <br>
            <!-- <span class="font-weight-bold text-danger text-uppercase">GFCOVID-19</span> <br>
            <span class="small">Support to receive and treat Covid-19 Patients</span> -->
        </h2>
        <div class="row col-12">
            <div class="col p-2 m-2 bg-info" style="height: 100px;">
                <a href="index.php?KBYT" class="nav-link text-white">
                    <div class="icon d-flex justify-content-center my-2">
                        <i class="fas fa-calendar-plus fa-2x"></i>
                    </div>
                    <span class="d-flex justify-content-center font-weight-bold p-1">Khai báo y tế</span>
                </a>
            </div>
            <div class="col p-2 m-2 bg-info" style="height: 100px;">
                <a href="index.php?search" class="nav-link text-white">
                    <div class="icon d-flex justify-content-center my-2">
                        <i class="fas fa-search fa-2x"></i>
                    </div>
                    <span class="d-flex justify-content-center font-weight-bold p-1">Tìm kiếm</span>
                </a>
            </div>
            <?php
            include_once("Controller/cBenhNhan.php");
            $p = new controlBenhNhan;
            $a = $_SESSION['tenTK'];
            $tblID = $p->getIDBenhNhan($a);
            $row = mysqli_fetch_assoc($tblID);
            $idBN = $row['id_benhnhan'];
            ?>
            <div class="col p-2 m-2 bg-info" style="height: 100px;">
                <a href="index.php?YCCV&idBN=<?php echo $idBN ?>" class="nav-link text-white">
                    <div class="icon d-flex justify-content-center my-2">
                        <i class="fas fa-procedures fa-2x"></i>
                    </div>
                    <span class="d-flex justify-content-center font-weight-bold p-1">Yêu cầu chuyển viện</span>
                </a>
            </div>            
            <div class="col p-2 m-2 bg-info" style="height: 100px;">
                <a href="index.php?reply&idBN=<?php echo $idBN ?>" class="nav-link text-white">
                    <div class="icon d-flex justify-content-center my-2">
                        <i class="fas fa-comments fa-2x"></i>
                    </div>
                    <span class="d-flex justify-content-center font-weight-bold p-1">Tư Vấn</span>
                </a>
            </div>
            <!-- <div class="col p-2 m-2 bg-info" style="height: 100px;">

            </div>
            <div class="col p-2 m-2 bg-info" style="height: 100px;"></div>
            <div class="col p-2 m-2 bg-info" style="height: 100px;"></div>
            <div class="col p-2 m-2 bg-info" style="height: 100px;"></div> -->
        </div>
        <!-- <h2>abc</h2>
        <div class="row col-12">
            <div class="col bg-success p-2 m-2" style="height: 500px;"></div>
            <div class="col bg-success p-2 m-2" style="height: 500px;"></div>
            <div class="col bg-success p-2 m-2" style="height: 500px;"></div>
        </div> -->
    </div>
</div>