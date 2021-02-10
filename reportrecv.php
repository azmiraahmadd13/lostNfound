

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
		<table align="center" border="0" width="70%" cellpadding="0" cellspacing="0">
			<td><hr></td>
				<td width="20%" align="center"><h2><font color="#1168da">List of report received</font></h2></td>
			<td><hr></td>
		</table>
		<!-- List of books content -->
		
				<form action="" method="post">
				
				<table align="center" border="0" width="70%" cellpadding="5" cellspacing="0">
					<tr  align="center"> 
						
						<td width="7%" style="background-color: #ededed;">No.</td>
						<!--inline css-->						<td width="10%" style="background-color: #ededed;">Lost items details</td>
						<td width="10%" style="background-color: #ededed;">Report by</td>
						<td width="10%" style="background-color: #ededed;">Image item</td>
						<td width="15%" style="background-color: #ededed;" colspan=2>Action</td>
					</tr>
					
					<?php 
						include ('connection.php');
						$sql = "SELECT * FROM student_report"; 
						$result = mysqli_query($conn,$sql);
						
						if ($result == TRUE) {
							$no = 0;
							while($row = mysqli_fetch_array($result)){
					
					
					
					
					?>
					<tr> 
						<td style="border-bottom: 1px solid #b3b3b3;" align="center"><?php echo ++$no; ?></td>
						<td style="border-bottom: 1px solid #b3b3b3;"><?php echo $row['item_lost']; ?></td>
						<td style="border-bottom: 1px solid #b3b3b3;" align="center"><?php echo $row['matric_no']; ?></td>
						<td style="border-bottom: 1px solid #b3b3b3;" align="center"><img src="<?php echo $row['lost_path'];?>"</td>
						<td style="border-bottom: 1px solid #b3b3b3;"align="center">
				
								<td style="border-bottom: 1px solid #b3b3b3;"align="center">
							<form method="post" action="inform.php">
								<input type="hidden" name="reportStatus" value="Claim" ?>
								<input type="hidden" name="item_id" value="<?php echo $row['item_id']; ?>" ?>
							<button name="accept" type="submit"> Inform </button>
							</form>
							</td>
						
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
<div class="footer">

</div>

</body>
</html>