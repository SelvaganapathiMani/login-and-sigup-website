<?php
 session_start();
 
include "config.php";

$email = $_POST["email"];
$pass = $_POST["pass"];

$_SESSION['email']=$email;
$_SESSION['password']=$pass;
if($email =="" || $pass == "")
{
	echo "2";
}
else
{

$sql = "SELECT * FROM user_table ";
$result = mysqli_query($conn,$sql);
//	echo "connect table";
if(mysqli_num_rows($result) > 0)
{
	while($row=mysqli_fetch_assoc($result))
	{    if($email==$row['email'] && $pass == $row['password'])
		{
		
		echo "1";
		}
	}
}

}
?>