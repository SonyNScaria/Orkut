<?php
session_start();
include_once("albumclass.php");
$ob1=new album();
$id=$_SESSION['id'];
$res=$ob1->display($id);
?>
<center>
 <p>Album</p>
  <p><a href="albumdesign.php">Upload photos</a> </p>
  </center>
  <?php
while($r=mysqli_fetch_array($res))
{
?>
<form name="form1" method="post" action=""><center>
 
  <p><img src="upload/<?php echo $r[3]?>"  width="200" height="200"> 
  
    <input type="checkbox" name="chk[]" value="<?php echo $r[0];?>">
	</p></center>
    <?php
	
}
?>
  
  <p>
    <input name="delete" type="submit" id="delete" value="Delete">
  </p>
</form>
