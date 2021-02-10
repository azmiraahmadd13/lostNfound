<?php
	//get values passes from form in login.php file
	$username = $POST['username'];
	$password = $POST['password'];

	//to prevent mysql injection
	$username = stripcslashes($id);
	$password = stripcslashes($password);
	$username = mysql_real_escape_string($id);
	$password = mysql_real_escape_string($password);

	//connect to the server and select database
	mysql_connect("localhost", "root", "");
	mysql_select_db("login");

	//query the database for user 
	$result = mysql_query(*select *from user where id = '$id' and password = $'password') or die("failed to query database".mysql_error());
	$row = mysql_fetch_array($result);
	if ($row['username'] == $username && $row['password'] == $password) {
		echo "Login success".$row['id'];
	}else{
		echo "failed to login";
	}

	?>