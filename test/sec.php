<?php
 session_start();
 
include "php/config.php";

$ema = $_POST["ema"];
$pass = $_POST["pass"];

$email=$_SESSION['email'];
$_SESSION['email']=$ema;
if($email =="" || $pass == "")
{
	echo "2";
}
else
{

$sql = "UPDATE user_table SET email ='".$ema."',password ='".$pass."' WHERE email ='".$email."'";
if(mysqli_query($conn,$sql))
{	
echo "1";
}
else
{
	echo"error";
}
}
?>