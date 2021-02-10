
		
		
		
		

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Event Management System</title>

<link rel="stylesheet" type="text/css" href="styles/style_admin.css">
	
	<tr>	
<style>
.header {
  padding: 10px 16px;
  background: #34495e;
  color: #fff;
}
</style>


<div class="header" id="myHeader">
  <h2>Lost and Found System</h2>

  
</div>
			<?php	
		session_start();
		
		$matric_no = $_SESSION['matric_no'];
	
		
		include ('connection.php');
		
		$sql = "SELECT * FROM user WHERE matric_no = '$matric_no'";
		$result=mysqli_query($conn,$sql);
		$row=mysqli_fetch_array($result);
	
			
		
		$conn -> close();
		
?>	
</head>
	
<body>
	<div id="sidemenu">
	

	
	<div id="sidemenu">
    <ul style="list-style-type:none;">
    	<li><input class="Minput" type="text" name="Fname" value="<?php echo $row['Fname']; ?>"disabled></li>
   	<li><a href="student1.php"> Lost Item list </a></li>
   	<li><a href="browse.php"> Search lost item</a></li>
    <li><a href="report.php"> Report lost item</a></li>
    <li><a href="reportList.php"> Report list</a></li>
    <li> <a href="logoutS.php" class="menu" onClick="return confirm('Are You Sure ?')">Logout</a></li>


 </ul>	
</div>
	
		
		<div>
				
			
		
  </li>
		
 </ul></div>
</body>
	
	
	
	

</html>
	
	
	