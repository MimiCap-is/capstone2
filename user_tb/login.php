 <?php 
include('connect.php')
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="style1.css">
 </head>
 <body>
 <div class="input-group">
	<form action="login.php" method="post">
		<center>
		<h2>Log In</h2>
  		<label>User Name</label>
  		<input type="text" name="username" placeholder="Input User Name" style="font-family: Georgia, 'Times New Roman', Times, serif;">
  		<br>
  		<div class="input-group">
  		<label>User Password</label>
  		<input type="password" name="userpassword" placeholder="Input Password" style="font-family: Georgia, 'Times New Roman', Times, serif;">
  		</div><br>
 	
		<button type="submit" name="login" value='Login'>Log In</a></button>
		
		<button type="reset" class="btn" name="login">Cancel</button>
	
	

		</center>
	
		
  	</form>
	</center>
 </body>
 </html>
  	

