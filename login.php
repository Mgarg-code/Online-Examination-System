<?php
session_start();
include("db.php");
extract($_POST);

$query = "select email,pass from users where email='".$email."' and pass='".$pass."'";

$r = mysqli_query($con,$query);


$count  = mysqli_num_rows($r);

if($count>0)
{
		
		$_SESSION['email'] = $email;
		header("Location:home.php");
}
else
{
	header("Location:index.php?run=failed");
}








?>