
<?php  
session_start();
require_once "class/quantritin.php";
$qt = new quantritin;
if ($_POST) {
   $username = trim($_POST['username']); 
   $password = trim($_POST['password']);
   $kq = $qt-> XuLiDangNhap($username, $password);
	
   if ($kq) {//Thành công				
      $_SESSION['login_id'] = $kq['idUser'];
      $_SESSION['login_user'] = $kq['Username'];
      $_SESSION['login_level'] = $kq['role'];
      $_SESSION['login_hoten'] = $kq['HoTen'];
      $_SESSION['login_email'] = $kq['Email'];
      if ( strlen($_SESSION['back']) > 0 ){
         $back= $_SESSION['back']; 
         unset($_SESSION['back']);
         header("location:$back");	    
      } 
	   elseif($_SESSION['login_level']==1){
		   header("location: index.php");
	   }
	   
	  elseif($_SESSION['login_level']==0){ header("location: quantri/index.php");}
	  
   } else header("location: login.php");	//Thất bại
}
?>
<!doctype html>
<html class="no-js" lang="zxx">
	<title>Đăng nhập</title>
<?php require "head.php"?>
    <body>
        
            <div class="breadcrumb-area" style="margin-bottom: 50px">
                <div class="container">
                    <div class="breadcrumb-content">
                        <ul>
                            <li><a href="index.html">Trang chủ</a></li>
                            <li class="active">Đăng nhập</li>
                        </ul>
                    </div>
					
					<div class="dangki"style="float: right;font-size: 20px;"><strong><a href="register.php" style="padding: 20px;color: white;background-color: #363f4d;border-radius: 10px">Đăng kí tài khoản</a></strong></div>
                </div>
            </div>
            <!-- Li's Breadcrumb Area End Here -->
            <!-- Begin Login Content Area -->
			
            <div class="page-section mb-60">
                <div class="container">
                    <div class="row">
                            <!-- Login Form s-->
                            <form style="margin: 0 15% 0 20%" method="post" id="sign_in">
                                <div class="login-form">
                                    <h4 class="login-title">Đăng nhập</h4>
                                    <div class="row">
                                        <div class="col-md-12 col-12 mb-20">
                                            <label for="username">Tên đăng nhập</label>
                                            <input name="username" class="mb-0" type="text" placeholder="Tên đăng nhập" required autofocus >
                                        </div>
                                        <div class="col-12 mb-20">
                                            <label for="password">Mật khẩu</label>
                                            <input name="password" class="mb-0" type="password" placeholder="Mật khẩu" required >
                                        </div>
                                        <div class="col-md-8">
                                            <div class="check-box d-inline-block ml-0 ml-md-2 mt-10">
                                                <input type="checkbox" id="remember_me" name="rememberme" >
                                                <label for="remember_me">Ghi nhớ</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mt-10 mb-20 text-left text-md-right">
                                            <a href="#"> Quên mật khẩu?</a>
                                        </div>
                                        <div class="col-md-12">
                                            <button class="register-button mt-0" type="submit">Đăng nhập</button>
                                        </div>
                                </div>
                            </form>
                        </div>
                        
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
