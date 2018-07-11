<?php
include_once("profileclass.php");
session_start();
$id=$_SESSION['id'];
include_once("albumclass.php");
$a=$_POST["textfield"];
$b=$_FILES['f1']['name'];
$ob=new album();
$ob->insert($id,$a,$b);
move_uploaded_file ($_FILES['f1']['tmp_name'],"upload/".$_FILES['f1']['name']);
header("Location:index.php");
?>