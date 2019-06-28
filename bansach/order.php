<?php 
 
	if(isset($_SESSION['DonHang'])==false){
		header('location:index.php');exit();
	}
$thongbao=array();
$qt->LuuDonHang($thongbao,$_SESSION['login_id']);
if(count($thongbao)==0){
	$qt->LuuChiTietDonHang();
	unset($_SESSION['DayTenSP']);
	unset($_SESSION['DaySoLuong']);
	unset($_SESSION['DayDonGia']);
	unset($_SESSION['DonHang']);
}
?>
<?php if(count($thongbao)>0){?>
<div style="height: 200px; margin: 5%10% 5% 0%">
	<div style="height: 25%	;background-color: #DBD62A;border: 3px solid #DBD62A;border-radius: 30px 30px 100px 100px;text-align: center"><h3 style="margin-top:1%;">Có lỗi xảy ra</h3></div>
	<div style="text-align: center;background-color: white;border: 2px solid #BDC82B;height: 80%;border-radius:  70px 70px 20px 20px;"><p style="margin-top: 3%;font-size: 16px">Đơn hàng của bạn đang xảy ra lỗi</p></div>
	<?php foreach($thongbao as $e) echo $e;?><br>
	<p><a href="index.php"><h3>Trang chủ</h3></a></p>
</div><?php } else {?> 
	<div style="height: 25%	;background-color: #DBD62A;border: 3px solid #DBD62A;border-radius: 30px 30px 100px 100px;text-align: center"><h3 style="margin-top:1%;">Thành công</h3></div>
	<div style="text-align: center;background-color: white;border: 2px solid #BDC82B;height: 80%;border-radius:  70px 70px 20px 20px;"><p style="margin-top: 3%;font-size: 16px">Đơn hàng của bạn đang được xử lí.<br>Chúng tôi sẽ giao hàng trong thời gian sớm nhất.<br>Mọi thắc mắc trong quá trình sử dụng.<br>Xin liên hệ cho chúng tôi.</p></div>
	<p><a href="index.php"><h3>Trang chủ</h3></a></p>
<?php }?>
<br><br>
