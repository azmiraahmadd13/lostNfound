<html>
<head>
<title>Lost and Found System</title>
<link rel="stylesheet" type="text/css" href="styles/style_admin.css">
</head>


<body>



<div class="main">
	
		<?php include 'menu.php'; ?>
		<li><a><?php echo $row['Fname']; ?></a></li>
	
	</div>






<div class="Mcontent">
	<br><br><br><br>
		<table align="center" border="0" width="50%" cellpadding="0" cellspacing="0">
			<td><hr></td>
				<td width="20%" align="center"><h2><font color="#1168da">Claim lost item form</font></h2></td>
			<td><hr></td>
		</table>
		<!-- register books content -->
				<?php 
				  include ('connection.php');
					$sql = "SELECT * FROM lost_item WHERE item_id ='".$_GET['item_id']."'";
					$result = mysqli_query($conn,$sql);
					$row = mysqli_fetch_array($result);
					
				?>
					
				<form action="claim1.php?item_id=<?php echo $row['item_id']; ?>"  method="post">
				
				<table align="center" border="0" width="40%" cellpadding="5" cellspacing="0">
					<tr> 
						<td align="center" width="30%"> Item Id </td>
						<td><input class="Minput" type="text" name="item_id" value="<?php echo $row['item_id']; ?> " required></td>
					</tr>
					<tr> 
						<td align="center" width="30%"> Item Details </td>
						<td><input class="Minput" type="text" name="item_details" value="<?php echo $row['item_details']; ?> " autofocus required></td>
					</tr>
					<tr> 
						<td align="center" width="30%"> Matric Number</td>
						<td><input class="Minput" type="text" name="retrieved_by" value="<?php echo $row['retrieved_by']; ?> " autofocus required></td>
					</tr>
					
					<tr> 
						<td align="center" width="30%"> Retrieved Date</td>
						<td><input class="Minput" type="date" name="retrieval_date" value="<?php echo $row['retrieval_date']; ?> " autofocus required></td>
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