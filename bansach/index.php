<?php 
session_start();
if(isset($_GET['p'])){
$p=$_GET['p'];}
if(isset($_GET['k'])){
$k=$_GET['k'];}
require_once "class/quantritin.php";
$qt=new quantritin;
$qt->KiemTraDangNhap();

 $_SESSION['login_id'];//Lấy idUser để lưu đơn hàng
?>
<!doctype html>
<html class="no-js" lang="zxx">
<!-- index-431:41-->
<?php require "head.php"?>
    <body>
		
        <!-- Begin Body Wrapper -->
        <div class="body-wrapper">
            <header class="li-header-4">
				<?php 
				 if($qt->KiemTraDangNhap()==true)
				{
					header('location:login.php');
				 }
				else {?>
				<div class="header" style="min-height: 100px;border-radius: 30px;border: 6px ridge#DE1F22">
					<div class="trai" style="float: left;margin-top: 2%;margin-left: 12%"><h2 style="color: white">Xin chào: <?= $_SESSION['login_hoten'];?></h2></div>
					<div class="phai" style="float: right;margin-top: 2.5%;margin-right: 12%" ><a href="exit.php"><h4><span aria-hidden="true" style="wid">&times;</span> Thoát</h4></a></div>
				</div>
				
				<?php } ?>
 <hr style="margin: 0">
                <?php require "header-middle.php"?>
			<!--menu-->
                				
                  <?php require "menu.php"; ?>              
            </header>
		<div class="container">
			<?php if(isset($_GET['action'])&isset($_GET['idSP'])){$action=$_GET['action'];
					$idSP=$_GET['idSP'];
					$qt->CapNhatGioHang($action,$idSP);}?>
			<?php 
			
			if(isset($p)){
				if($p=="sanpham") require "shop-list-right-sidebar.php" ;
				if($p=="sanpham1") require "listsptronglsp.php" ;
				if($p=="details") require "listsp.php" ;
				if($p=="giohang") require "shopping-cart.php" ;
				if($p=="thanhtoan") require "checkout.php" ;
				if($p=="thanhtoan2") require "checkout2.php" ;
				if($p=="dathang") require "order.php" ;
				if($p=="dangki") require "register.php";
				if($p=="chitiet") require "single-product.php";
				if($p=="timkiem") require "timkiemsp.php";
			}

			else
			{?>
            <?php require "slider.php"?>
            <?php require "slider2.php"?>
            <div class="li-static-banner li-static-banner-4 text-center pt-20">
                <div class="container">
                    <div class="row">
                        <!-- Begin Single Banner Area -->
                        <div class="col-lg-6">
                            <div class="single-banner pb-sm-30 pb-xs-30">
                                <a href="#">
                                    <img src="img/tai-ebook-mien-phi-1.png" alt="Li's Static Banner" width="600px" height="200px">
                                </a>
                            </div>
                        </div>
                        <!-- Single Banner Area End Here -->
                        <!-- Begin Single Banner Area -->
                        <div class="col-lg-6">
                            <div class="single-banner">
                                <a href="#">
                                    <img src="img/ebook.png" width="600px" height="200px"alt="Li's Static Banner">
                                </a>
                            </div>
                        </div>
                        <!-- Single Banner Area End Here -->
                    </div>
                </div>
            </div>
            <?php require "slider3.php";?>
            <?php require "saleoff.php"?>
            <?php require "group-featured-product.php"?>
           <?php }?>
		</div>
            <div class="footer">  
                <?php  require"footer-top.php"?>           
                <?php require"footer.php";?>
                
            </div>
               
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

<!-- index-431:47-->
</html>
