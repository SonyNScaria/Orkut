<?php
include_once("requestclass.php");
$ob1=new request();
$id=$_GET['fid'];
$fid=$_GET['id'];
echo $id;
echo $fid;
$ob1->insert($id,$fid);
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