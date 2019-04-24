<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Login/Registration Form Transition</title>
  
  
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>

      <link rel="stylesheet" href="css/style.css">
	  <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
	  <script>
	  $(document).ready(function(){
	              
                  $("#update").click(function(){
					  window.location ="update.php";
				  });
					  
				  });
	</script>
</head>

<body style ="background-color:black">

  <p class="tip">Click on button in image container</p>
<div class="cont">
  <div class="form sign-in">
   <center> <h2 style="Color:green">Welcome<br><br></h2></center>
     <?php 

 include "php/config.php";
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
		echo "<center><p style='color:green'>Name:".$row['name']."</p><br><p style='color:green'>email:".$row['email']."</p><br><p style='color:green'>password:".$row['password']."</p><br> <p style='color:green'>DOB:".$row['dob']."</p><br><p style='color:green'>Age:".$row['age']."</p><br><p style='color:green'>Phone No:".$row['phone']."</p></center> ";
		}
	}
}

?>
<form action ="update.php" method="post">
 <button type="button" class="submit" id = "update">UPDATE INFORMATION</button>   
  </form>
</div>
 

    <script  src="js/index.js"></script>




</body>

</html>
