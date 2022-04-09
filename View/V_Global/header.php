<header>
    <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
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
                                <a href="index.php" class="nav-link">Trang chủ</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link">About</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link">Services</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link">Team</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link">Connect</a>
                            </li>
                        </ul>
                    </div>
                    <a href="index.php?Login" class="nav-item nav-link text_login">Đăng nhập</a>';
                }
            ?>


        </div>
    </nav>
</header>