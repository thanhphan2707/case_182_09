<?php
session_start();
require_once "../class/quantri.php";
$qt = new quantritin;   
if(isset($_GET['idSP']))
$idSP = $_GET['idSP']; settype($idSP,"int");
$kq = $qt->SP_Xoa($idSP);
header("location:index.php?p=tin_ds");

?>