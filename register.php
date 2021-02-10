<!DOCTYPE html>
<html>
<head>
	<title>Lost and Found Management System</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

		<!--header-->

		<div class="register-form">
			<img src="logo.jpg" alt="" class="avatar">
			<h2>Register</h2>
			<form action="register1.php" method="POST">
			<p>Matric No.</p>
				<input type="id" placeholder="Enter Matric No." id="matric_no" name="matric_no" autofocus required />
			<p>Name</p>
				<input type="text" placeholder="Enter Name" id="Fname" name="Fname" required/>
			<p>Contact No.</p>
				<input type="text" placeholder="Enter Your Contact No." id="cnum" name="cnum" required />
			<p>Password</p>
				<input type="Password" placeholder="Enter Password" id="password" name="password" required />
			<p>Re-Type Password</p>
				<input type="Password" placeholder="Re-Type Password" id="password" name="password" required />
			
				<input type="submit" id="btn" value="Register"/>
		
			</form>
		</div>
</body>
</html>