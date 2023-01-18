<?php 
include 'config.php';
$id=$_GET['id'];
mysql_query("delete from cable_multi_pear where id='$id'");
header("location:cable_multi_pear.php");

?>