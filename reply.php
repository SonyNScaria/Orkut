<?php
include_once("messageclass.php");
$too=$_GET['id'];
$fromm=$_SESSION['id'];
$ob1=new profile();
$res=$ob1->selectid($too);
$d=mysqli_fetch_array($res);
if(!empty($_POST))
   {
	   $body=$_POST['textarea'];
	   $ob1=new message();
       $ob1->insert($too,$body,$fromm);
	   
	   //redirect_to("admin.php");
	   //header('location:redirect.php');
	   //echo "<meta http-equiv='refresh' name='index.php'>";
	   
   }
?>
<form name="form1" method="post" action="">
  <table width="355" border="0">
    <tr>
      <td width="37"><img src="profile/<?php echo $d[1];?>"width="60" height="60" border="0"></td>
      <td width="302" rowspan="2"><label for="textarea"></label>
      <textarea name="textarea" id="textarea" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      <td><?php echo $d[2] ?></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="submit" id="submit" value="send"></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
