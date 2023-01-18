<?php 
include 'config.php';
$No=$_GET['No'];
mysql_query("delete from cable_multi_pear where No='$No'");
header("location:home_multi.php");

?>