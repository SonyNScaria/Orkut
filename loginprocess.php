<?php
session_start();
include_once("loginclass.php");
$a=$_POST["t1"];
$b=$_POST["t2"];
$ob1=new login();
$res=$ob1->check($a,$b);
$r=mysqli_num_rows($res);
if($r==0)
{
header("Location:login.php");
}
else
{
$d=mysqli_fetch_array($res);
$_SESSION["id"]=$d[0];
header("Location:index.php");
}
?>