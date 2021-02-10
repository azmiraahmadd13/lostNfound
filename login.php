<!DOCTYPE html>
<html>
<head>
	<title>Lost and Found Management System</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

		<!--header-->

		<div class="contact-form">
			<img src="logo.jpg" alt="" class="avatar">
			<h2>Login</h2>
			<form action="logintry.php" method="POST">
			<p>User ID</p>
				<input type="id" placeholder="Enter User ID" id="matric_no" name="matric_no" autofocus required/>
			
			<p>Password</p>
				<input type="Password" placeholder="Enter Password" id="password" name="password" required/>

			
				<input type="submit" id="btn" value="Login"/>
		<p>	
			<span class="psw"><a href="forgotpass.php">Forgot Password?</a></span>
		</p>
		<p>	
			Don't have an account? <a href="register.php">Register Now</a>
		</p>
			</form>
		</div>
</body>
</html>