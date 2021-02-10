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
		
		$name = $_SESSION['name'];
	
		
		include ('connection.php');
		
		$sql = "SELECT * FROM admin WHERE name = '$name'";
		$result=mysqli_query($conn,$sql);
		$row=mysqli_fetch_array($result);
	
			
		
		$conn -> close();
		
?>		
</head>
	
<body>
	<div id="sidemenu">
	

	
	<div id="sidemenu">
    <ul style="list-style-type:none;">
    <li><input class="Minput" type="text" name="name" value="<?php echo $row['name']; ?>"disabled></li>
   	<li><a href="list.php"> Lost Item list </a></li>
    <li><a href="add.php"> Add New Lost Item </a></li>
	<li><a href="action.php"> Update Lost Item</a></li>
	<li><a href="deluser.php"> Delete user </a></li>
	<li><a href="reportrecv.php"> Report received </a></li>
	<li><a href="admin.php"> Monthly report </a></li>
	 <li> <a href="logout.php" class="menu" onClick="return confirm('Are You Sure ?')">Logout</a></li>
 </ul>	
</div>
   


 </ul>	
</div>
	
		
		<div>
				
			
		
  </li>
		
 </ul></div>
</body>
	
	
	
	

</html>
	
	
		