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
 $res=mysql_query("SELECT * FROM karyawan WHERE uname='$uname'");
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
<body background ="4.jpg">
<center >
<div id="login-form">
<form method="post" color="red">
<table align="center" width="30%" border="0" bgcolor="#4c9de7" > 
<tr>

<td><center><font face="tahoma" color="#961919">
<h3>LOGIN SEBAGAI KARYAWAN</h3>
<br>
<h3>SISTEM PENDATAAN BARANG</h3>
<br>
<h2></h2></font></center>
<br>
<h4><font color="#a23232">Silahkan Login...</font></h4>
<input type="text" name="uname" placeholder="masukan username anda" required /></td>
</tr>
<tr>
<td><input type="password" name="pass" placeholder="masukan password anda" required /></td>
</tr>
<tr>
<td><button type="submit" name="btn-login" color="white">MASUK</button>
<br>
<br>
<center><a href="awal.php" ><font color="red">kembali</font></a></td>
</tr>
</table>
</form>
</div>
</center>
</body>

</html>

