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
	              
                  $("#up").click(function(){
					  
                      $.ajax({
                           type:"POST",
						   url:"sec.php",
						   data:{
							   ema:$("#email").val(),
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
								 url:"php/per.php",
								 data:{
									 name:$("#name").val(),
									 age:$("#age").val(),
									 dob:$("#dob").val(),
									 phone:$("#phone").val()
								 },
								 success:function(mydata)
								 {
									 if(mydata==1)
									 {     
										 window.location="home.php";
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
    <h2>Update Email and Password</h2>


  <label>
      <span>Email</span>
      <input type="email" id="email" />
    </label>
    <label>
      <span>Password</span>
      <input type="password" id="password"/>
    </label>
    
    <button type="button" class="submit" id="up" value="submit">Update</button>
    
  </div>
 
  <div class="sub-cont">
    <div class="img">
      <div class="img__text m--up">
        <h2>Personal</h2>
        <p>Personal information change here !!</p>
      </div>
      <div class="img__text m--in">
        <h2>Security</h2>
        <p>Security information change here !!</p>
      </div>
      <div class="img__btn">
        <span class="m--up">Personal</span>
        <span class="m--in">Security</span>
      </div>
    </div>
    <div class="form sign-up">
      <h2>Update Personal Information</h2>
      <label>
        <span>Name</span>
        <input type="text" id="name"/>
      </label>
      <label>
        <span>DOB</span>
        <input type="text" id ="dob"/>
      </label>
      <label>
        <span>Age</span>
        <input type="number" id ="age"/>
      </label>
	  <label>
        <span>Phone No</span>
        <input type="number" id ="phone"/>
      </label>
      <button type="button" class="submit" id = "logup">Update</button>
      
    </div>
  </div>
</div>
 

    <script  src="js/index.js"></script>




</body>

</html>
