<?php
    ob_start();
    session_start();
?>
<div class="container-fluid" style="height: 610px;">
    <div class="pag-login d-flex align-items-center justify-content-center h-100">
        <form class="form_login" action="DNWin.php" method="post">
            <h4>Đăng nhập hệ thống</h4>
            <?php
                echo $_SESSION['notierror'];
            ?>
            <div class="input-group form-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                </div>
                <input type="text" class="form-control pl-4" name="user" placeholder="Nhập tên tài khoản hoặc SĐT">
            </div>
            <div class="input-group form-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                </div>
                <input type="password" class="form-control pl-4" name="pass" placeholder="Nhập mật khẩu">
            </div>
            <div class="d-flex justify-content-end pr-2">
                <button type="submit" name="submit" class="btn btn-primary">Đăng nhập</button>
            </div>

            <div class="attention">
                <?php
                    if($_SESSION['loss'] == true){  
                        if($_SESSION['dem'] <= 4){
                            echo'
                            <span class="text-danger">Bạn được nhập sai tối đa 5 lần.</br></span>
                            Số lần đăng nhập còn lại: <span class="text-danger font-weight-bold">'.$_SESSION['dem'].'</span>
                            ';
                        }                      
                        if($_SESSION['dem'] == 0){
                            $_SESSION['error'] +=1;
                            if($_SESSION['error'] == 1){
                                echo '<script>alert("Bạn đã nhập sai quá 5 lần. Vui lòng chờ! 5 phút");</script>';                                
                                // sleep(300);
                                sleep(3);
                            }
                            if($_SESSION['error'] == 2){
                                echo '<script>alert("Bạn đã nhập sai quá 5 lần. Vui lòng chờ! 10 phút");</script>';
                                // sleep(600);
                                sleep(6);
                            }
                            if($_SESSION['error'] == 3){
                                echo '<script>alert("Bạn đã nhập sai quá 5 lần. Vui lòng chờ! 30 phút");</script>';
                                // sleep(1800);
                                sleep(10);
                            }
                            if($_SESSION['error'] == 4){
                                echo '<script>alert("Bạn đã nhập sai quá 5 lần. Vui lòng chờ! 60 phút");</script>';
                                // sleep(3600);
                                sleep(15);
                            }
                            if($_SESSION['error'] == 5){
                                echo '<script>alert("Bạn đã nhập sai quá 5 lần. Vui lòng chờ! 1 ngày");</script>';
                                // sleep(86400);
                                sleep(20);
                            }
                            echo header("refresh:0; url='index.php?Login'");
                            $_SESSION['dem'] = 5;
                        }
                    }
                    else{
                        $_SESSION['dem'] = 5;
                    }
                ?>
                <p class="text2">CHÚ Ý: Tên tài khoản là số điện thoại bạn đã <a href="index.php?KBYT"><b>khai báo y tế</b></a> <br> Mật khẩu mặc định là 12345678</p>
            </div>
        </form>
    </div>
</div>
</body>