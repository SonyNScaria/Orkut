<form method="post" action="">
  
  <table width="406" border="0">
    <tr>
      <td width="280">
      <input type="text" name="textfield" id="textfield"></td>
      <td width="116"><input type="submit" name="submit" id="submit" value="Search"></td>
    </tr>

<?php 
include_once("profileclass.php");
if(!empty($_POST))
   {
	   $body=$_POST['textfield'];
	   $ob1=new profile();
$res=$ob1->selectn($body);
?>
<tr>
      <td colspan="2">SEARCH RESULTS</td>
    </tr>
    <?php
while($d=mysqli_fetch_array($res))
{
	?>
    <tr>
      <td><a href="index.php?pid=s&fid=<?php echo $d[0] ?>"><img src="profile/<?php echo $d[1];?>"width="120" height="120" border="0"></td>
      </tr>
    <tr>
    <td><a href="index.php?pid=s&fid=<?php echo $d[0] ?>"><?php echo $d[2] ?></a></td>
    </tr>
    <tr>
    <td>
    ---------------------------------------------
    </td>
    </tr>
	
    <?php
}
	   
   }
   ?>



    
    
  </table>
  
  <p>&nbsp;</p>
</form>

