<div id="wrapper" style="margin-top: 100px;">
    <div class="left-side-menu">
        <!--- Sidemenu -->
        <div id="sidebar-menu" style="margin-top: 50px;">

            <ul class="metismenu" id="side-menu">

                <li class="menu-title">Search</li>
                <li>
                    <a href="index.php?search">
                        <i class="fas fa-search"></i>
                        <span>Tìm kiếm bệnh nhân</span>
                    </a>
                </li>
                <li>
                    <a href="index.php?search&TKBV">
                        <i class="fas fa-search"></i>
                        <span>Tìm kiếm bệnh viện</span>
                    </a>
                </li>
            </ul>

        </div>
        <div class="clearfix"></div>
    </div>

    <div class="content-page">
        <div class="content">

            <!-- Start container-fluid -->
            <div class="container-fluid">
                <?php
                if (isset($_REQUEST['TKBV'])) {
                    echo 'TKBV';
                    // include_once "View/V_Views/VTKBV.php";
                } elseif (isset($_REQUEST['TKBN'])) {
                    // include_once "View/V_Views/VTKBN.php";
                    echo 'TKBN';
                } else {
                    echo 'Trang tìm kiếm';
                }
                ?>

            </div>
        </div>
    </div>
</div>