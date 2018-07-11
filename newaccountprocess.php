
<?php
session_start();
include_once("profileclass.php");
include_once("loginclass.php");
$fname=$_POST['t1'];
$lname=$_POST['t2'];
$email=$_POST['t3'];
$a=$_POST['t4'];
$b=$_POST['t5'];
$p=$_FILES['file']['name'];
if($a==$b)
{
$pass=$a;
$sq=$_POST['s1'];
$ans=$_POST['t6'];
//$p="hi";
$ob= new profile();
$ob->insert($p,$fname,$lname,$email,$sq,$ans);
$res=$ob->selectemail($email);
$r=mysqli_fetch_array($res);
move_uploaded_file ($_FILES['file']['tmp_name'],"profile/".$_FILES['file']['name']);
$ob1=new login();
$ob1->insert($r[0],$email,$pass);
$_SESSION["id"]=$r[0];
}
else
{
//header("Location:newaccount.php");
}
?>
<form name="form1" method="post" action="index.php">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="200" border="0">
    <tr>
      <td>Account Created</td>
    </tr>
    <tr>
      <td><input type="submit" name="submit" id="submit" value="ok"></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>