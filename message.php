
<?php
session_start();
include_once("messageclass.php");
$id=$_SESSION['id'];
$ob11=new message();
$ob22=new profile();
$mres=$ob11->selectid($id);
?>
<table width="249" border="0">
  <tr>
    <td colspan="5">&nbsp;</td>
 </tr>
<?php
while($mr=mysqli_fetch_array($mres))
 {	 
 $mres1=$ob22->selectid($mr[3]);
 $mr1=mysqli_fetch_array($mres1);
 ?>
<tr>
  <td width="83"><img src="profile/<?php echo $mr1[1];?>"width="60" height="60" border="0"></td>
  <td colspan="3"><textarea draggable="auto" wrap="soft" name="textarea" readonly><?php echo $mr[2] ?></textarea></td>
  </tr>
  <tr>
    <td><?php echo $mr1[2] ?></td>
    <td width="100"><a href="index.php?pid=r&id=<?php echo $mr1[0] ?>">reply</a></td>
    <td width="119"><a href="index.php?pid=d&id=<?php echo $mr[0] ?>">delete</a></td
  ></tr>
<?php
 }
 ?>
 </table>
  


