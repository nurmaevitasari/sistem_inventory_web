<?php 
include 'config.php';
$Tanggal=$_POST['Tanggal'];
$Masuk=$_POST['Masuk'];
$Keluar=$_POST['Keluar'];
$Unit=$_POST['Unit'];
$Subplier=$_POST['Suplier'];
$Project=$_POST['Project'];
$Stock=$_POST['Stock'];

mysql_query("insert into patch_fo_lc values('','$Tanggal','$Masuk','$Keluar','$Unit','$Subplier','$Project','$Stock')");
header("location:home_fo_lc.php");

 ?>