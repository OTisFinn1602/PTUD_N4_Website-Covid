<header style="position: fixed; z-index: 99999; top: 0; right: 0; left: 0;">
    <nav class="navbar navbar-expand-md navbar-light bg-secondary sticky-top">
        <div class="container-fluid">
            <a href="index.php" class="navbar-brand">
                <img src="./images/logo-19-removebg-preview.png" alt="Logo" width="170" height="70">
            </a>
            <?php
                if(!isset($_REQUEST['Login'])){
                    echo '<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a href="index.php" class="nav-link text-white">Trang chủ</a>
                            </li>
                            <li class="nav-item">
                                <a href="admin.php" class="nav-link text-white">Admin</a>
                            </li>
                            <li class="nav-item">
                                <a href="BenhVien.php" class="nav-link text-white">Bệnh Viện</a>
                            </li>
                            <li class="nav-item">
                                <a href="index.php?spBN" class="nav-link text-white">Chăm sóc bệnh nhân</a>
                            </li>
                            <li class="nav-item">
                                <a href="index.php?UpSucKhoe" class="nav-link text-white">Cập Nhật Sức Khỏe</a>
                            </li>                            
                        </ul>
                    </div>';
                    if($_SESSION['dntc'] == true){
                        echo '<a href="index.php?Logout" class="nav-item nav-link text-white">Đăng xuất</a>';
                    }else{
                        echo '<a href="index.php?Login" class="nav-item nav-link text-white">Đăng nhập</a>';
                    }
                    if(isset($_REQUEST['Logout'])){
                        unset($_SESSION['dntc']);
                        echo '<script>alert("Đăng xuất thành công!");</script>';
                        echo header("refresh:0; url='index.php'");
                    }
                }        
            ?>


        </div>
    </nav>
</header>