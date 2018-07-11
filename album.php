<?php
include_once("albumclass.php"); 
$ob1=new album();
$res=$ob1->display($id);
?>
<center>
 <p>Album</p>
  <p><a href="index.php?pid=up">Upload photos</a> </p>
  </center>
  <?php
while($r=mysqli_fetch_array($res))
{
?>
<form name="form1" method="post" action=""><center>
 
  <p><img src="upload/<?php echo $r[3]?>"  width="100" height="100"> 
  
    <input type="checkbox" name="chk[]" value="<?php echo $r[0];?>">
	</p></center>
    <?php
	
}
?>
  
  <p>
    
  </p>
</form>
