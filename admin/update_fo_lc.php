<?php 
include 'config.php';
$Tanggal=$_POST['Tanggal'];
$Masuk=$_POST['Masuk'];
$Keluar=$_POST['keluar'];
$Unit=$_POST['Unit'];
$Subplier=$_POST['Suplier'];
$Project=$_POST['Project'];
$Stock=$_POST['Stock'];

mysql_query("update patch_fo_lc set Tanggal='$Tanggal', Masuk='$Masuk', Keluar='$Keluar', Unit='$Unit', Subplier='$Subplier', Project='$project' , Stock='$Stock' where No='$No'");
header("location:home_fo_lc\.php");

?>