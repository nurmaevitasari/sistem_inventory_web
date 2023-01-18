<?php
if(isset($_SESSION['uname'])!="")
include_once 'config.php';
include 'header.php';
if(isset($_POST['btn-signup']))
{
 $uname = mysql_real_escape_string($_POST['uname']);
 $pass = mysql_real_escape_string($_POST['pass']);
 $Namalengkap = mysql_real_escape_string($_POST['Namalengkap']);
 $Email = mysql_real_escape_string($_POST['Email']); 
 


 
 if(mysql_query("INSERT INTO admin(uname,pass,Namalengkap,Email) VALUES('$uname','$pass','$Namalengkap','$Email)"))
 {
  ?>
        <script>alert('successfully registered ');</script>
        <?php
 }
 else
 {
  ?>
        <script>alert('error while registering you...');</script>
        <?php
 }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PT.APTEK</title>
<link rel="stylesheet" href="style.css" type="text/css" />

</head>
<body>

<div id="login-form">
<form method="post">
<table align="center" width="30%" border="0">
<tr>
<td><input type="text" name="uname" placeholder="Masukan Username" required /></td>
</tr>
<tr>
<td><input type="password" name="pass" placeholder="Masukan Password" required /></td>
</tr>
<tr>
<td><input type="text" name="Namalengkap" placeholder="Masukan Nama Lengkap" required /></td>
</tr>
<tr>
<td><input type="Email" name="Email" placeholder="Masukan Email" required /></td>
</tr>
<tr>
<td><button type="submit" name="btn-signup">TAMBAH USER</button></td>
</tr>
</table>
</form>
</div>
</body>
</html>