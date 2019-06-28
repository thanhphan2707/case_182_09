<?php
session_start();
require_once "../class/quantri.php";
$qt = new quantritin;


$idUser = $_GET['idUser']; settype($idUser,"int");
	$qt->users_xoa($idUser);
	header("location:index.php?p=users_ds");
?>
