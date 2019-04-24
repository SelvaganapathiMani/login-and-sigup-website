<?php
 session_start();
 
include "config.php";

$ema = $_POST["email"];
$pass = $_POST["pass"];

$email=$_SESSION['email'];
if($email =="" || $pass == "")
{
	echo "2";
}
else
{

$sql = "UPDATE user_table SET email ='".$email."'and password='".$pass."' WHERE email ='".$email."'";
if(mysqli_query($conn,$sql))
{	
echo "success";
}
else
{
	echo"error";
}
}
?>