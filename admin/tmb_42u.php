<?php 
include 'config.php';
$Tanggal=$_POST['Tanggal'];
$Masuk=$_POST['Masuk'];
$Keluar=$_POST['Keluar'];
$Unit=$_POST['Unit'];
$Subplier=$_POST['Suplier'];
$Project=$_POST['Project'];
$Stock=$_POST['Stock'];

mysql_query("insert into clos_rack_42u values('','$Tanggal','$Masuk','$Keluar','$Unit','$Suplier','$Project','$Stock')");
header("location:home_42u.php");

 ?>