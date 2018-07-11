<?php
include_once("database.php");
class album
{
function insert($id,$caption,$pathname)
{
$qry="insert into album (mid,caption,pathname) values ('$id','$caption','$pathname')";
$ob=new database();
$ob->execute($qry);
}
function deletes($id)
{
$qry="delete from album where id=$id";
$ob=new database();
$ob->execute($qry);
}
function display($id)
{
$qry="select * from album where mid=$id";
$ob=new database();
return $ob->execute($qry);
}
}
?>
