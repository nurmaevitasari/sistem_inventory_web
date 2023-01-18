<?php 
include 'config.php';
$No=$_POST['No'];
$Tanggal=$_POST['Tanggal'];
$Masuk=$_POST['Masuk'];
$Keluar=$_POST['Keluar'];
$Unit=$_POST['Unit'];
$Suplier=$_POST['Suplier'];
$Project=$_POST['Project'];
$Stock=$_POST['Stock'];

mysql_query("update cable_multi_pear set Tanggal='$Tanggal', Masuk='$Masuk', Keluar='$Keluar', Unit='$Unit', Suplier='$Suplier', Project='$Project' , Stock='$Stock' where No='$No'");
header("location:home_multi.php");

?>