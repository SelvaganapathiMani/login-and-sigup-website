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
	              
                  $("#login").click(function(){
                      $.ajax({

                           type:"POST",
						   url:"php/test.php",
						   data:{
							   email:$("#email").val(),
							   pass:$("#password").val()
						   },
						   success:function(mydata){
							   if(mydata == "1")
							   {
								   window.location="home.php";
								   
							   }
							   else if(mydata == 2)
							   {
								   alert("fill email or password someone missing");
							   }
							   else
							   {
								   alert("invalied email and password");
							   }
							   
						   }
						   
					  });						  
				  });
				  
				  $("#logup").click(function(){
				               
                             $.ajax({
								 type:"POST",
								 url:"php/test2.php",
								 data:{
									 name:$("#name").val(),
									 email:$("#em").val(),
									 pass:$("#pa").val()
								 },
								 success:function(mydata)
								 {
									 if(mydata==1)
									 {     alert("Sign-Up Success")
										 window.location="index.php";
									 }
									 else if(mydata == 2)
									 {
										 alert("someone filed is missing  please fill")
									 }
									 else
									 {
										 alert("sign-up error");
									 }
                                        								   
								 }
							 });								 
				   
				  });

            });
  </script>
</head>

<body>

  <p class="tip">Click on button in image container</p>
<div class="cont">
  <div class="form sign-in">
    <h2>Welcome back,</h2>


  <label>
      <span>Email</span>
      <input type="email" id="email" />
    </label>
    <label>
      <span>Password</span>
      <input type="password" id="password"/>
    </label>
    <p class="forgot-pass">Forgot password?</p>
	
    <button type="button" class="submit" id="login" value="submit">Sign In</button>
    <button type="button" class="fb-btn">Connect with <span>facebook</span></button>
  </div>
 
  <div class="sub-cont">
    <div class="img">
      <div class="img__text m--up">
        <h2>New here?</h2>
        <p>Sign up and discover great amount of new opportunities!</p>
      </div>
      <div class="img__text m--in">
        <h2>One of us?</h2>
        <p>If you already has an account, just sign in. We've missed you!</p>
      </div>
      <div class="img__btn">
        <span class="m--up">Sign Up</span>
        <span class="m--in">Sign In</span>
      </div>
    </div>
    <div class="form sign-up">
      <h2>Time to feel like home,</h2>
      <label>
        <span>Name</span>
        <input type="text" id="name"/>
      </label>
      <label>
        <span>Email</span>
        <input type="email" id ="em"/>
      </label>
      <label>
        <span>Password</span>
        <input type="password" id ="pa"/>
      </label>
      <button type="button" class="submit" id = "logup">Sign Up</button>
      <button type="button" class="fb-btn">Join with <span>facebook</span></button>
    </div>
  </div>
</div>
 

    <script  src="js/index.js"></script>




</body>

</html>
