
<?php 
	session_start();
	require_once "../class/quantri.php";
	$qt = new quantritin;
	$qt-> checkLogin();
	$idLSP = $_GET['idLSP'];
	settype($idLSP,"int");
	$qt->LoaiSP_Xoa($idLSP);
	header("location:index.php?p=loaitin_ds");
?>
