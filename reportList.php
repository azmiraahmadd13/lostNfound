<html>
<head>
<title>Lost and Found System</title>
<link rel="stylesheet" type="text/css" href="styles/style_admin.css">
</head>


<body>



<div class="main">
	
		<?php include 'menu.php'; ?>

	
	</div>









<div class="Mcontent">
	<br><br><br><br>
		<table align="center" border="0" width="70%" cellpadding="0" cellspacing="0">
			<td><hr></td>
				<td width="20%" align="center"><h2><font color="#1168da">Report list</font></h2></td>
			<td><hr></td>
		</table>
		<!-- List of books content -->
		
				<form action="" method="post">
				
				<table align="center" border="0" width="70%" cellpadding="5" cellspacing="0">
					<tr  align="center"> 
						
						<td width="7%" style="background-color: #ededed;">No.</td>
						<td width="20%" style="background-color: #ededed;">Lost items details</td>
						<td width="10%" style="background-color: #ededed;">Report date</td>
						<td width="15%" style="background-color: #ededed;">Report Status</td>
						
					</tr>

				
					<?php 
						include ('connection.php');
						
		
						

						$sql = "SELECT * FROM student_report INNER JOIN user ON student_report.matric_no=user.matric_no WHERE student_report.matric_no = '$matric_no' ";
						$result = mysqli_query($conn,$sql);
						
						if ($result == TRUE) {
							$no = 0;
							while($row = mysqli_fetch_array($result)){
					
					?>
					
					<tr> 
						<td style="border-bottom: 1px solid #b3b3b3;" align="center"><?php echo ++$no; ?></td>
						<td style="border-bottom: 1px solid #b3b3b3;"><?php echo $row['item_lost']; ?></td>
						<td style="border-bottom: 1px solid #b3b3b3;" align="center"><?php echo $row['report_date']; ?></td>
						<td style="border-bottom: 1px solid #b3b3b3;" align="center"><?php echo $row['reportStatus']; ?></td>
						
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
	
	</div>

</body>
</html>