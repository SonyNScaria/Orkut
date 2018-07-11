<?php
include_once("database.php");
class login
{
function insert($id,$email,$pass)
{
$qry="insert into login (id,email,pass) values ($id,'$email','$pass')";
$ob=new database();
$ob->execute($qry);
}
function check($user,$pass)
{
$qry="select * from login where email='$user' and pass='$pass'";
$ob=new database();
return $ob->execute($qry);
}
}
?>
