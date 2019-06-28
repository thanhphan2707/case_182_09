<!--

<?php


/*echo $_SESSION['login_id'];
if($_SERVER['REQUEST_URI']=="/maytinh/test.php"){
echo $_SERVER['REQUEST_URI'];}
require "class/quantritin.php";
$qt=new quantritin;
$kq=$qt->SPSale();

while($rowkq=$kq->fetch_assoc()){
	echo $rowkq['TenSP']."<br>";
	echo "---------------";
}
$kq1=$qt->SPSale();

while($rowkq1=$kq1->fetch_assoc()){
	echo $rowkq1['TenSP']."<br>";
	echo "---------------";
}
*/


?>-->


<?php /*require("class/quantritin.php");
$qt=new quantritin;
$tukhoa=$_GET['tukhoa'];
$kq=$qt->TimKiem($tukhoa,0,5);
while($rowkq=$kq->fetch_array()){
	echo $rowkq['TenSP']."<br>";
}*/
echo date("yy-m-d")."<br>";
echo date("yyyy-mm-dd")."<br>";
?>
<!--<form action="" class="hm-searchbox" method="get">
									<?php 
										$tukhoa=(isset($_GET['tukhoa'])==true)? $_GET['tukhoa']:"";
									$tukhoa=str_replace(array('"'.'"'),"",trim(strip_tags($tukhoa)));
									?>

									<input type="hidden"name="p" value="timkiem">
                                    <input type="text" placeholder="Nhập thông tin tìm kiếm ..." name="tukhoa" value="<?=$tukhoa?>" >
									
                                    <button class="li-btn" type="submit"><i class="fa fa-search"></i></button>
                                </form>-->

<?php /*$kq=$qt->TotalRecords();
	
	$rowkq=$kq->fetch_assoc();
echo $t_r=$rowkq['count(*)'];*/
/*$array = array(
    'php' ,
    'java' ,
    'css' ,
    'html',
    );
echo current($array).'<br />'; // Show: php
// in ra key của phần tử hiện tại
echo key($array).'<br />'; //Show:0
//di chuyển con trỏ nộ bộ 2 lần
    next($array);
    next($array);
// tiếp tục in ra key của phần tử hiện tại
echo key($array).'<br />';//Show: 2*/
								
								?>


<form action="" method="post">
    Thành phố: <br>
    <select name="city">
        <option value="1">Hà Nội</option>
        <option value="2">Hồ Chí Minh</option>
        <option value="3">Đà Nẵng</option>
        <option value="4">Cần Thơ</option>
    </select>
    <button type="submit">Gửi</button>
</form>
<?php if(isset($_POST["city"])) { echo $_POST["city"]; } ?>
<!--<form method="get" action="" class="bg-info p-t-10 p-b-10 p-l-10">
								<input name="p" type="hidden" value="tin_ds">
								<?php $listTL= $qt->ListTheLoai();?>
								
								<select id="idTL" name="idTL" onchange="this.form.idLT.value=-1; this.form.submit();">
								<option value=-1>Chọn thể loại</option>
								<?php while ($r= $listTL->fetch_assoc()){ ?>
								   <?php if ($r['idTL']==$_GET['idTL']) { ?>
								   <option value="<?=$r['idTL']?>" selected> <?=$r['TenTL']?> </option>
								   <?php } else {?>
								   <option value="<?=$r['idTL']?>"> <?=$r['TenTL']?> </option>
								   <?php } ?>
								<?php } ?>
								</select>

									<?php $listLT= $qt->ListLoaiTin();?>
								
								<select id="idLT" name="idLT" onchange="this.form.idTL.value=-1; this.form.submit();">
								<option value=-1>Chọn loại tin</option>
								<?php while ($r= $listLT->fetch_assoc()){ ?>
									<?php if ($r['idLT']==$_GET['idLT']) { ?>
									<option value="<?=$r['idLT']?>" selected> <?=$r['Ten']?> </option>
									<?php } else {?>
									<option value="<?=$r['idLT']?>">  <?=$r['Ten']?> </option>
									<?php } //if ?>
								<?php } //while ?>
								</select>
								
							</form>-->

                            