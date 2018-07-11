<?php
include_once("messageclass.php");

$ob1=new message();
$id=$_GET['id'];
$ob1->delete($id);
?>