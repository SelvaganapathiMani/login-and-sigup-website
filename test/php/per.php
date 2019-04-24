<?php
 session_start();
 
include "config.php";

$na = $_POST["name"];
$d = $_POST["dob"];
$a = $_POST["age"];
$p = $_POST["phone"];

$email=$_SESSION['email'];
if($na =="" || $p == "" || $a=="")
{
	echo "2";
}
else
{

$sql = "UPDATE user_table SET name ='".$na."',dob='".$d."',age='".$a."',phone='".$p."' WHERE email ='".$email."'";
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