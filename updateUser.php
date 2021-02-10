<html>
<head>
<title>Lost and Found System</title>
<link rel="stylesheet" type="text/css" href="styles/style_admin.css">
</head>


<body>



<div class="main">
	
		<?php include 'menuA.php'; ?>
		
	
	</div>





<div class="Mcontent">
	<br><br><br><br>
		<table align="center" border="0" width="50%" cellpadding="0" cellspacing="0">
			<td><hr></td>
				<td width="20%" align="center"><h2><font color="#1168da">Update User</font></h2></td>
			<td><hr></td>
		</table>
		<!-- register books content -->
				<?php 
				  include ('connection.php');
					$sql = "SELECT * FROM user WHERE matric_no ='".$_GET['matric_no']."'";
					$result = mysqli_query($conn,$sql);
					$row = mysqli_fetch_array($result);
					
				?>
					
				<form action="updateUser1.php?matric_no=<?php echo $row['matric_no']; ?>"  method="post">
				
				<table align="center" border="0" width="40%" cellpadding="5" cellspacing="0">
					<tr> 
						<td align="center" width="30%"> Matric Number: </td>
						<td><input class="Minput" type="text" name="matric_no" value="<?php echo $row['matric_no']; ?> "></td>
					</tr>
					<tr> 
						<td align="center" width="30%"> Name: </td>
						<td><input class="Minput" type="text" name="Fname" value="<?php echo $row['Fname']; ?> " autofocus required></td>
					</tr>
					<tr> 
						<td align="center" width="30%"> Contact Number: </td>
						<td><input class="Minput" type="text" name="cnum" value="<?php echo $row['cnum']; ?> " autofocus required></td>
					</tr>

					
					
					<tr> 
						<td> </td>
						<td><input class="Lbtn" type="submit" name="submit" value="submit"></td>
					</tr>
				
				</table>
			
				</form>
				
			</tr>
		</table>
	
	</div
<div class="footer">

</div>

</body>
</html>