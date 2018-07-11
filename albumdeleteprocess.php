<?php
include_once("albumclass.php");
$id=$_POST['chk[]'];

foreach($id as $val)
{
	echo $id;
$qry="delete from album where id=$val";
$res=mysqli_query($con,$qry);
}
//header("Location:albumdisplay.php");

?>
