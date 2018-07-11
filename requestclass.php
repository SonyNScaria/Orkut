<?php
include_once("database.php");
class request
{
function insert($id,$fid)
{
$qry="insert into request values ('$id','$fid')";
$ob=new database();
$ob->execute($qry);
}

function delete($id,$fid)
{
$qry="delete from request where id='$id' and fid='$fid'";
$ob=new database();
return $ob->execute($qry);
}

function selectid($id)
{
$qry="select * from request where id='$id'";
$ob=new database();
return $ob->execute($qry);
}
function selectfid($id,$fid)
{
$qry="select * from request where id='$id' and fid='$fid'";
$ob=new database();
return $ob->execute($qry);
}
}
?>