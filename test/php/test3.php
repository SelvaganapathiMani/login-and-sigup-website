<!DOCTYPE html>
<html>
<head>
<title>
test
</title>
</head>
<body>

<center><h1>TEST</h1></center>

<?php 

 include "config.php";
 session_start();
 $email=$_SESSION['email'];
$sql = "SELECT * FROM user_table ";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) > 0)
{
	while($row=mysqli_fetch_assoc($result))
	{   
		if($email == $row['email'])
		{
		echo "id: ".$row['id']."<br>email: ".$row['email']."<br>password: ".$row['password'];
		}
	}
}

?>

</body>
</html>