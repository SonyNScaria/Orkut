<?php
session_start();
include_once("requestclass.php");
include_once("friendclass.php");
$id=$_SESSION['id'];
$fid=$_GET['fid'];
$aob1=new friend();
$aob2=new request();
echo $id;
echo $fid;
$ares=$aob1->insert($id,$fid);
$ares=$aob1->insert($fid,$id);
$rres=$aob2->delete($id,$fid);
?>
<form name="form1" method="post" action="index.php">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="200" border="0">
    <tr>
      <td>Request Accepted</td>
    </tr>
    <tr>
      <td><input type="submit" name="submit" id="submit" value="ok"></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>