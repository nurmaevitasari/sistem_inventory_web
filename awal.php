


<?php
session_start();
include_once 'admin/config.php';
if(isset($_SESSION['uname'])!="")
{
 header("Location: index.php");
}
if(isset($_POST['btn-login']))
{
 $uname = mysql_real_escape_string($_POST['uname']);
 $pass = mysql_real_escape_string($_POST['pass']);
 $res=mysql_query("SELECT * FROM admin WHERE uname='$uname'");
 $row=mysql_fetch_array($res);
 if($row['pass']==($pass))
 {
  $_SESSION['uname'] = $row['uname'];
  header("Location: admin/index.php");
 }
 else
 {
  ?>
        <script>alert('Password Atau Username Yang Anda Masukan Salah');</script>
        <?php
 }
 
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PT.APTEK</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<link rel="icon" href="icon.png">
</head>
<body background ="3.jpg">
<center >
<valign= "middle">
<br>
<br>
<br>
<H1><font color="#edf65e">SISTEM PENDATAAN BARANG<br>
PT.ANUGRAH PRATAMA TEKNOLOGI</font></h1>
<br>
<br><pre>
<form name="formulir" action="index.php" method="POST"> <input type="image" src="11.png" height="150" width="150"></form>            <form name="button" action="index1.php" method="POST"> <input type="image" src="direktur.png" height="150" width="150"></form>    <form name="button" action="index_admin.php" method="POST"> <input type="image" src="admin.png" height="150" width="150"></form></pre>

 </valign>
  

</center>
</body>

</html>


