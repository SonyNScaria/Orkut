<?php
include_once("database.php");
class message
{
function insert($to,$body,$from)
{
$qry="insert into message (too,body,fromm) values ('$to','$body','$from')";

$ob=new database();
return $ob->execute($qry);
}

function delete($id)
{
 $qry="delete from message where id='$id'";
 echo "Your message is deleted";
$ob=new database();
return $ob->execute($qry);
}

function selectid($id)
{
$qry="select * from message where too=$id";
$ob=new database();
return $ob->execute($qry);
}
}
?>