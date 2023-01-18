<?php 
include 'config.php';
$No=$_POST['No'];
$Tanggal=$_POST['Tanggal'];
$Masuk=$_POST['Masuk'];
$Keluar=$_POST['keluar'];
$Unit=$_POST['Unit'];
$Subplier=$_POST['Suplier'];
$Project=$_POST['Project'];
$Stock=$_POST['Stock'];

mysql_query("update clos_rack_30u set Tanggal='$Tanggal', Masuk='$Masuk', Keluar='$Keluar', Unit='$Unit', Suplier='$Suplier', Project='$project' , Stock='$Stock' where No='$No'");
header("location:home_30u.php");

?>