<html>
<head>
<title>Lost and Found System</title>
<link rel="stylesheet" type="text/css" href="styles/style_admin.css">
</head>


<body>
<div class="main">
	
		<?php include 'menu.php'; ?>
		<?php	
		session_start();
		
		$matric_no = $_SESSION['matric_no'];
	
		
		include ('connection.php');
		
		$sql = "SELECT * FROM user WHERE matric_no = '$matric_no'";
		$result=mysqli_query($conn,$sql);
		$row=mysqli_fetch_array($result);
	
			
		
		$conn -> close();
		
?>	
			
	
	</div>








<div class="Mcontent">
	<br><br><br><br>
		<table align="center" border="0" width="70%" cellpadding="0" cellspacing="0">
			<td><hr></td>
				<td width="20%" align="center"><h2><font color="#1896e2">Report lost item</font></h2></td>
			<td><hr></td>
		</table>
		<!-- register books content -->

						<form action="upload1.php" method="post" enctype="multipart/form-data">
    					<table align="center" border="0" width="40%" cellpadding="5" cellspacng="0">
						<tr> 
							<td align="center" width="30%">  Select image to upload: </td>
							<td><input type="file" name="fileToUploadLost" id="fileToUploadLost"></td>
						</tr>
						<tr> 
							<td align="center" width="30%"> Lost item details: </td>
							<td><input class="Minput" type="text" name="item_lost" autofocus required></td>
						</tr>

						<tr> 
							<td align="center" width="30%"> Matric Number:  </td>
							<td><input class="Minput" type="text" name="matric_no" value="<?php echo $row['matric_no']; ?>"disabled></td>
						</tr>
						<tr> 
							<td align="center" width="30%"> Date of Lost:  </td>
							<td><input class="Minput" type="date" name="report_date" required></td>
						</tr>		
						<tr> 
						<td> </td>
						<input  type="hidden" name="matric_no" value="<?php echo $row['matric_no']; ?>"></td>
						<input type="hidden" name="reportStatus" value= "WAITING">
						<td><input class="Lbtn" type="submit" name="submit" value="submit"></td>
					</tr>
				
						</table>
			
					</form>

				
				
	
	</div>
<div class="footer">

</div>

</body>
</html>