<?php 
include 'config.php';
$No=$_GET['No'];
mysql_query("delete from clos_rack_30u where No='$No'");
header("location:home_30u.php");

?>