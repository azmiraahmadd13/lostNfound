<?php	
		session_start();
		
		$_SESSION['matric_no']= $_POST['matric_no'];
		$_SESSION['password'] = $_POST['password'];
		//$_SESSION['usertype']= $_POST['usertype'];
		
		include ('connection.php');
		
		$sql = "SELECT * FROM user WHERE matric_no = '".$_SESSION['matric_no']."' AND password='".$_SESSION['password']."'";
		$result=mysqli_query($conn,$sql);
		$row=mysqli_fetch_array($result);
	
			if ($row==TRUE) 
			{
					echo '<script language="javascript">';
					echo 'alert("Login Sucess");';
					echo 'window.location.href="student1.php";';
					echo'</script>';
			}
			else 
			{
		
					echo'<script language="javascript">';
					echo 'alert("Login Error");';
					echo 'window.location.href="login.php";';
					echo '</script>';
			}
		
		$conn -> close();
		
?>		
				
		