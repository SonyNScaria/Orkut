<form name="form1" method="post" action="index.php">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="200" border="0">
    <tr>
      <td>Request Declined</td>
    </tr>
    <tr>
      <td><input type="submit" name="submit" id="submit" value="ok"></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>
<?php
session_start();
include_once("requestclass.php");
$id=$_SESSION['id'];
$fid=$_GET['fid'];
$aob2=new request();
$rres=$aob2->delete($id,$fid);
?>