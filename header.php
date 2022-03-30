<div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="user-menu">
                        <ul>
                            <li><a href="index.php"><i class="fa fa-user"></i> Trang Chủ</a></li>
                            <li><a href="user.php"><i class="fa fa-user"></i> Tài Khoản</a></li>
                            <?php
                                if(empty($_SESSION['id'])){
                            ?>
                            <li><a href="signin.php"><i class="fa fa-user"></i> Đăng Nhập</a></li>
                            <li><a href="signup.php"><i class="fa fa-user"></i> Đăng Ký</a></li>
                            <?php
                                }else{
                            ?>
                            <li><a href="signout.php"><i class="fa fa-user"></i> Đăng Xuất</a></li>
                                <?php
                                }
                                ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</div> <!-- End header area -->
    
    
