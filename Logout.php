<?php
session_start();

if(!isset($_SESSION['uname']))
{
 header("Location: index.php");
}
else if(isset($_SESSION['uname'])!="")
{
 header("Location: home.php");
}

if(isset($_GET['logout']))
{
 session_destroy();
 unset($_SESSION['uname']);
 header("Location: index.php");
}
?>