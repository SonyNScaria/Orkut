<?php 
session_start();
include_once("profileclass.php");
include_once("friendclass.php");
$fid=$_GET['fid'];
$id=$_SESSION['id'];
$ob1=new profile();
$fnd=new friend();
$f1=$fnd->selectfid($fid);
$d1=mysqli_fetch_array($f1);
$fres=$ob1->selectid($fid);
$d11=mysqli_fetch_array($fres);

?>
<table width="200" border="0">
  <tr>
    <td><img src="profile/<?php echo $d11[1];?>"width="60" height="60" border="0"></td>
    <td></td>
  </tr>
  <tr>
    <td>Firstname</td>
    <td><?php echo $d11[2] ?></td>
  </tr>
  <tr>
    <td>Lastname</td>
    <td><?php echo $d11[3] ?></td>
  </tr>
<?php 
if($d1==0)
{
	?>
	<tr>
    <td><a href="index.php?pid=make&fid=<?php echo $fid?>&id=<?php echo $id ?>">make friendship</a></td>
    <td>&nbsp;</td>
  </tr>
<?php
}
?>





  
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
