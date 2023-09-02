<?php include('connect.php') ?>

<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style1.css">
 
</head>
<body>


  <div class="header">
  	<h2>Register a User</h2>
  </div>
	
  <form method="post" action="register1.php">
  
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" style="    font-family: Georgia, 'Times New Roman', Times, serif;" required placeholder="Enter Your User Name" >
  	</div>

  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" style="    font-family: Georgia, 'Times New Roman', Times, serif;" placeholder="Enter Your Password" required name="userpassword">
  	</div>
	<div class="user">
	<center><h3>User Type</h3>
	
  	  <input type="radio" name="usertype" value="Guest" required>Guest
		
  	  <input type="radio" name="usertype" value="Admin" required>Admin
	</center>
	</div>
	

  	</div>
	<div class="input-group">
  	  <label>Full Name</label>
  	  <input type="text" style="    font-family: Georgia, 'Times New Roman', Times, serif;" name="fullname" required placeholder="Enter Your Full Name" >
  	</div>
	<div class="input-wrapper">
      <label>Date of Birth</label>
      <input type="date" name="birthdate" value="">
      
    </div>
  	<center>
	  <div class="input-group">
  	  <button type="submit" class="btn" name="save_user">Save User</button>
  
  	  <button type="reset" class="btn" name="reg_user">Cancel</button>
  	</div>
	</center>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
  
</body>
</html>