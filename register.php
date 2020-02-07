<?php 
include("db.php");
extract($_POST);

$img_name = $_FILES['img']['name'];
$tmp_name = $_FILES['img']['tmp_name'];
move_uploaded_file($tmp_name, "img/".$img_name);


$query = "insert into users values('','".$name."','".$email."','".$pass."','".$img_name."')";

if(mysqli_query($con,$query))
{
	header("Location:index.php?run=success");
}








 ?>