	<?php

	session_start();
	include('connection.php');
	
	$matric_no = $_POST['matric_no'];
	$Fname = $_POST['Fname'];
	$cnum = $_POST['cnum'];
	$password = $_POST['password'];
	//$usertype = $_POST['usertype'];
	$ans1 = $_POST['ans1'];
	$ans2 = $_POST['ans2'];

	//$password = $_POST['password2'];
	
	/*if($password != $password2) {
		echo '<script language="javascript">';
		echo 'alert("Password invalid");';
		echo 'window.location.href="login.php"';
		echo'</script>';
		
	}*/
	$sql = mysqli_query($conn,"INSERT INTO user(matric_no,Fname,cnum,password,ans1,ans2)
	VALUES ('$matric_no','$Fname', '$cnum', '$password', '$ans1', '$ans2')");
	
	if($sql == TRUE) {
		echo '<script language="javascript">';
		echo 'alert("Register Successfully");';
		echo 'window.location.href="login.php";';
		echo'</script>';
	}else {
			echo "Error : ". $sql . "<br>" . $conn -> error;
	}
	$conn -> close();
	
?>
