<?php
session_start();
include_once("profileclass.php");
include_once("friendclass.php");
include_once("requestclass.php");
$ob1=new profile();
$fnd=new profile();
$rfnd=new profile();
$req=new request();
$id=$_SESSION['id'];
$res=$ob1->selectid($id);
$d=mysqli_fetch_array($res);
$ob2=new friend();
$f1=$req->selectid($id);
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style>
@font-face {
	font-family:sonyfont;
	src:url(fonts/journal.ttf);
}
 body
{
background-color:#ccc;
font-family:sonyfont;
border:none;

opacity:0.9;

 
}


td
{
	border:none;
}

.main
{
	position:relative;
	background:#999;
top:20px;
width:1000px;
height:600px;

margin:0px auto;


border:1px solid #fff;
 
 
}

.menu
{

margin:0px auto;
width:1000px;
height:60px;	
border:1px #CCC solid;
border:none;
}

.menu td
{
	border-right:1px #000000 solid;
}
.menu  a
{
	text-align:center;
	font-size:36px;
	text-decoration:none;
}
.leftmenu
{

left:0px;
position:relative;
width:250px;
height:540px;	
border:0px #CCC solid;
float:left;
box-shadow:0px 2px 12px 2px #333;
z-index:22;
background:#FC6;

}
.leftmenu td
{
	text-align:center;
	font-size:26px;
	border:none;
}

.rightmenu
{

float:right;
width:250px;
height:540px;	
border:0px #CCC solid;
z-index:22;
position:relative;
background:#FC6;
box-shadow:0px 2px 12px 2px #333;
border:none;
overflow:scroll;
}
.rightmenu td
{
	text-align:center;
	font-size:26px;
	border:none;
}
.centertable
{
position:absolute;
left:245px;
top:60px;
width:505px;
height:540px;	
border:0px #CCC solid;
background:#FC6;
border:none;
overflow:scroll;
}
.centertable td
{
padding-left:10px;
font-size:26px;
border:none;
}
</style>
</head>

<body>
<div class="main">
<table border="1" bgcolor="#FFFFFF" class="menu">
<tr>
	<td><a href="#"><center>Menu1</center></a></td></td>
    <td><a href="#"><center>Menu1</center></a></td>
    <td><a href="#"><center>Menu1</center></a></td>
    <td><a href="#"><center>Menu1</center></a></td>
    <td><a href="#"><center>Menu1</center></a></td>
</tr>
</table>
 
 
 <table border="1" bgcolor="#CCCCCC" class="leftmenu">
 <tr><td>hgf</td></tr>
 <tr><td>hgf</td></tr>
 <tr><td>hgf</td></tr>
 <tr><td>hgf</td></tr>
 <tr><td>hgf</td></tr>
 <tr><td>hgf</td></tr>
 
 </table>
 
  <div class="centertable">
  <li>dfgh</li>
  </div>
  
  
 <div class="rightmenu">
 <li>dfghj</li>
 </div>
</div>
	
</body>
</html>
