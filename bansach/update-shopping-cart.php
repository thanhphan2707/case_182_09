<?php session_start();
	require_once("class/quantritin.php");
$qt=new quantritin;
$action=$_GET['action'];
$idSP=$_GET['idSP'];
$qt->CapNhatGioHang($action,$idSP);
if($action=="add")
	header("location:index.php?p=giohang");
if($action=="remove")
	header("location:index.php?p=giohang");
if($action=="update")
	header("location:index.php?p=giohang");
/*print_r($_SESSION['DaySoLuong']);echo "<br>";
print_r($_SESSION['DayTenSP']);echo "<br>";
print_r($_SESSION['DayDonGia']);echo "<br>";*/
?>