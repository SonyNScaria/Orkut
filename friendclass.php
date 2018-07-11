<?php
include_once("database.php");
class friend
{
	
	function insert($id,$fid)
{
$qry="insert into friend values ('$id','$fid')";
$ob=new database();
$ob->execute($qry);
}

function selectid($id)
{
$qry="select * from friend where id='$id'";
$ob=new database();
return $ob->execute($qry);
}
function selectfid($id)
{
$qry="select * from friend where fid='$id'";
$ob=new database();
return $ob->execute($qry);
}
}
?>