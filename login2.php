<?php	
		session_start();
		
		$_SESSION['name']= $_POST['name'];
		$_SESSION['password'] = $_POST['password'];
	
		include ('connection.php');
		
		$sql = "SELECT * FROM admin WHERE name = '".$_SESSION['name']."' AND password='".$_SESSION['password']."'";
		$result=mysqli_query($conn,$sql);
		$row=mysqli_fetch_array($result);
	
			if ($row==TRUE) 
			{
					echo '<script language="javascript">';
					echo 'alert("Login Sucess");';
					echo 'window.location.href="list.php";';
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
				
		