<?php
include_once("database.php");
class profile
{
function insert($p,$fname,$lname,$email,$sq,$ans)
{
$qry="insert into profile (photo,firstname,lastname,email,sq,ans) values ('$p','$fname','$lname','$email','$sq','$ans')";
$ob=new database();
$ob->execute($qry);
}
function selectemail($email)
{
$qry="select * from profile where email='$email'";
$ob=new database();
return $ob->execute($qry);
}
function selectn($email)
{
$qry="select * from profile where firstname='$email'";
$ob=new database();
return $ob->execute($qry);
}
function selectid($id)
{
$qry="select * from profile where id=$id";
$ob=new database();
return $ob->execute($qry);
}
}
?>