<?php 
	session_start();
	require_once "../class/quantri.php";
	$qt = new quantritin;
	
	$idTLSP = $_GET['idTLSP'];
	settype($idTLSP,"int");
	$qt->TheLoaiSP_Xoa($idTLSP);
	header("location:index.php?p=theloai_ds");
?>