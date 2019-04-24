<?php
$name = $_POST["name"];
$email = $_POST["email"];
$pass = $_POST["pass"];

if($email =="" || $pass == "" || $name =="")
{
	echo "2";
}
else
{
	
$servername = "localhost";
$username = "root";
$password = "";
$db ="mydb";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);


// Check connection
if (! $conn) {
    die("Connection failed: " . mysqli_error());
} 
//echo "connection success ";
$sql = "INSERT INTO user_table (name,email,password)VALUES ('".$name."','".$email."','".$pass."')";
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