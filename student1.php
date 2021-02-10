<html>
<head>
<title>Lost and Found System</title>
<link rel="stylesheet" type="text/css" href="styles/style_admin.css">
</head>


<body>



<div class="main">
	
		<?php include 'menu.php'; ?>
		
	
	</div>



</div>

<div class="Mcontent">
	<br><br><br><br>
		<table align="center" border="0" width="70%" cellpadding="0" cellspacing="0">
			<td><hr></td>
				<td width="20%" align="center"><h2><font color="#1168da">List of lost items</font></h2></td>
			<td><hr></td>
		</table>
		<!-- List of books content -->
		
				<form action="" method="post">

				
				<table align="center" border="0" width="70%" cellpadding="5" cellspacing="0">
					<tr  align="center"> 
						
						<td width="7%" style="background-color: #ededed;">No.</td>
						<td width="10%" style="background-color: #ededed;">Lost items details</td>
						<td width="10%" style="background-color: #ededed;">Date of lost</td>
						<td width="10%" style="background-color: #ededed;">Item Status</td> 
						<td width="10%" style="background-color: #ededed;">Image</td> 
						
						<td width="15%" style="background-color: #ededed;" colspan=2>Action</td>
					</tr>
					
					<?php 
						include ('connection.php');
						$sql = "SELECT * FROM lost_item";
						$result = mysqli_query($conn,$sql);
						
						if ($result == TRUE) {
							$no = 0;
							while($row = mysqli_fetch_array($result)){
					
					
					
					
					?>
					<tr> 
						<td style="border-bottom: 1px solid #b3b3b3;" align="center"><?php echo ++$no; ?></td>
						<td style="border-bottom: 1px solid #b3b3b3;"><?php echo $row['item_details']; ?></td>
						<td style="border-bottom: 1px solid #b3b3b3;" align="center"><?php echo $row['received_date']; ?></td>
						<td style="border-bottom: 1px solid #b3b3b3;" align="center"><?php echo $row['item_status']; ?></td>
						<td style="border-bottom: 1px solid #b3b3b3;" align="center"><img src="<?php echo $row['file_path']; ?>"  width="350" height="350"></td>
						<td style="border-bottom: 1px solid #b3b3b3;" align="center"><a style="color: black" href="claim.php?item_id=<?php echo $row['item_id']; ?>" onClick="return confirm('Are You Sure?')">Claim</a></td>
					
					</tr>
					
					<?php 
							}
						} else {
						echo "0 Results";
							}
							$conn -> close ();
						?>	
				
				</table>
			
				</form>
				
			
		</table>
	
	</div
<div class="footer">

</div>

</body>
</html>