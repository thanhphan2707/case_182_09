<?php 
    require "class/quantritin.php";
    $qt=new quantritin;
    if(isset($_POST['hoten'])){
        $hoten=$_POST['hoten'];
         $email=$_POST['email'];
          $diachi=$_POST['diachi'];
           $password=$_POST['password'];
           $sdt=$_POST['sdt'];
           $username=$_POST['username'];
         
        $kq=$qt->DangKy($hoten,$username,$email,$diachi,$password,$sdt);

    }

 ?>


<!doctype html>
<html class="no-js" lang="zxx">
    <title>Đăng ký</title>
<!-- login-register31:27-->
<?php require "head.php"?>
    <body>
        <!-- Begin Body Wrapper -->
        <div class="body-wrapper">
            <div class="breadcrumb-area">
                <div class="container">
                    <div class="breadcrumb-content">
                        <ul>
                            <li><a href="index.php">Trang chủ</a></li>
                            <li class="active">Đăng ký</li>
							
                        </ul>
                    </div>
					<div style="float: right;font-size: 20px;"><strong><a href="login.php" style="padding: 20px;color: white;background-color: #363f4d;border-radius: 10px">Đăng nhập</a></strong></div>
                </div>
            </div>
            <!-- Li's Breadcrumb Area End Here -->
            <!-- Begin Login Content Area -->
            <div class="page-section mb-60">
                <div class="container">
                    <div class="row" style="">
                            <form action="#" style="margin: 0 15% 0 15%;" method="POST">
                                <div class="login-form">
                                    <h4 class="login-title">Đăng ký</h4>
                                    <div class="row">
                                        
                                        <div class="col-md-12 col-12 mb-20">
                                            <label>Họ tên *</label>
                                            <input class="mb-0" type="text" placeholder="Nhập họ tên" name="hoten">
                                        </div>
                                         <div class="col-md-12 col-12 mb-20">
                                            <label>Nhập tên người dùng *</label>
                                            <input class="mb-0" type="text" placeholder="Nhập Username" name="username">
                                        </div>
                                        <div class="col-md-12 mb-20">
                                            <label>Địa chỉ Email *</label>
                                            <input class="mb-0" type="email" placeholder="Nhập địa chỉ Email" name="email">
                                        </div>
                                         <div class="col-md-12 mb-20">
                                            <label>Số điện thoại *</label>
                                            <input class="mb-0" type="text" placeholder="Nhập số điện thoại" name="sdt">
                                        </div>
                                         <div class="col-md-12 mb-20">
                                            <label>Địa chỉ *</label>
                                            <input class="mb-0" type="text" placeholder="Nhập địa chỉ " name="diachi">
                                        </div>
                                        <div class="col-md-6 mb-20">
                                            <label>Mật khẩu *</label>
                                            <input class="mb-0" type="password" placeholder="Nhập mật khẩu" name="password">
                                        </div>
                                       
                                        <div class="col-12">
                                            <button class="register-button mt-0">Đăng ký</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        
                    </div>
                </div>
            </div>
            <!-- Login Content Area End Here -->
            <!-- Begin Footer Area -->
            <div class="footer">
                <!-- Begin Footer Static Top Area -->
                <?php  require"footer-top.php"?>
                <!-- Footer Static Top Area End Here -->
                <!-- Begin Footer Static Middle Area -->
                <?php require("footer.php");?>
                <!-- Footer Static Middle Area End Here -->
                <!-- Begin Footer Static Bottom Area -->
                <?php require "footer-bottom.php";?>
                <!-- Footer Static Bottom Area End Here -->
            </div>
            <!-- Footer Area End Here -->
        </div>
        <!-- Body Wrapper End Here -->
        <!-- jQuery-V1.12.4 -->
        <script src="js/vendor/jquery-1.12.4.min.js"></script>
        <!-- Popper js -->
        <script src="js/vendor/popper.min.js"></script>
        <!-- Bootstrap V4.1.3 Fremwork js -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Ajax Mail js -->
        <script src="js/ajax-mail.js"></script>
        <!-- Meanmenu js -->
        <script src="js/jquery.meanmenu.min.js"></script>
        <!-- Wow.min js -->
        <script src="js/wow.min.js"></script>
        <!-- Slick Carousel js -->
        <script src="js/slick.min.js"></script>
        <!-- Owl Carousel-2 js -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- Magnific popup js -->
        <script src="js/jquery.magnific-popup.min.js"></script>
        <!-- Isotope js -->
        <script src="js/isotope.pkgd.min.js"></script>
        <!-- Imagesloaded js -->
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <!-- Mixitup js -->
        <script src="js/jquery.mixitup.min.js"></script>
        <!-- Countdown -->
        <script src="js/jquery.countdown.min.js"></script>
        <!-- Counterup -->
        <script src="js/jquery.counterup.min.js"></script>
        <!-- Waypoints -->
        <script src="js/waypoints.min.js"></script>
        <!-- Barrating -->
        <script src="js/jquery.barrating.min.js"></script>
        <!-- Jquery-ui -->
        <script src="js/jquery-ui.min.js"></script>
        <!-- Venobox -->
        <script src="js/venobox.min.js"></script>
        <!-- Nice Select js -->
        <script src="js/jquery.nice-select.min.js"></script>
        <!-- ScrollUp js -->
        <script src="js/scrollUp.min.js"></script>
        <!-- Main/Activator js -->
        <script src="js/main.js"></script>
    </body>

<!-- login-register31:27-->
</html>
