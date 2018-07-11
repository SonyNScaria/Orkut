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
	<td><a href="index.php?pid=h"><center>home</center></a></td></td>
    <td><a href="index.php?pid=m"><center>message</center></a></td>
    <td><a href="index.php?pid=a"><center>snaps</center></a></td>
    <td><a href="index.php?pid=f"><center>search</center></a></td>
    <td><a href="index.php?pid=logout"><center>logout</center></a></td>
</tr>
</table>
 
 
 <table border="1" bgcolor="#CCCCCC" class="leftmenu">
 <tr><td><img src="profile/<?php echo $d[1];?>"width="120" height="120" border="0" style="border:solid;"></td></tr>
 <tr><td>Welcome <?php echo $d[2]." ".$d[3] ?></td></tr>
 <tr><td></td></tr>
 <tr><td></td></tr>
 <tr><td></td></tr>
 <tr><td></td></tr>
 
 </table>
 
   <table border="1" bgcolor="#CCCCCC" class="centertable">
 <tr><td></td></tr>
 <tr><td><?PHP
	$a=$_GET['pid'];
	$b=$_GET['id'];
	echo $a;
	if($a=='m')
	include_once("message.php");
	if($a=='r')
	{
	include_once("reply.php");
	}
	if($a=='d')
	{
	include_once("mdelete.php");
	}
	if($a=='make')
	{
	include_once("make.php");
	}
	if($a=='a')
	{
	include_once("album.php");
	}
	if($a=='up')
	{
	include_once("albumdesign.php");
	}
	if($a=='s')
	{
	include_once("search.php");
	}
	if($a=='accept')
	{
	include_once("accept.php");
	}
	if($a=='f')
	{
	include_once("waste.php");
	}
	?></td></tr>
 <tr><td>&nbsp;</td></tr>
 <tr>
   <td>&nbsp;</td></tr>
 <tr><td></td></tr>
 <tr><td></td></tr>
 
 </table>
  <table border="1" bgcolor="#CCCCCC" class="rightmenu">
  <?php
  while($r11=mysqli_fetch_array($f1))
{
$rres=$rfnd->selectid($r11[1]);
$rs=mysqli_fetch_array($rres);
?>
 <tr>
    <td colspan="2">   friends request</td>
    </tr>
  <tr>
    <td><img   src="profile/<?php echo $rs[1];?>"width="70" height="70" border="0"></td>
    <td><?php echo $rs[2] ?></td>
  </tr>
  <tr>
    <td><a href="index.php?pid=accept&fid=<?php echo $rs[0] ?>">accept</a></td>
    <td><a href="index.php?pid=decline&fid=<?php echo $rs[0] ?>">decline</a></td>
    </tr>
    <?php
	}
	?>
 <tr>
    <td>&nbsp;</td>
    <td><?php echo $d[2] ?>'s friends list</td>
  </tr>
  <?php
  $res1=$ob2->selectid($id);
  while($r1=mysqli_fetch_array($res1))
{
$fd=$r1[1];
$result=$fnd->selectid($fd);
$r=mysqli_fetch_array($result);
?>
<tr>
    <td><img   src="profile/<?php echo $r[1];?>"width="50" height="50" border="0"></td>
    <td><?php echo $r[2] ?></td>
    </tr>
    <?php
}
?>
 <tr><td></td></tr>
 
 </table>
</div>
	
</body>
</html>
