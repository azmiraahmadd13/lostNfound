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
				<td width="20%" align="center"><h2><font color="#1168da">Update lost item Status</font></h2></td>
			<td><hr></td>
		</table>
		<!-- register books content -->
				<?php 
				  include ('connection.php');
					$sql = "SELECT * FROM lost_item WHERE item_id ='".$_GET['item_id']."'";
					$result = mysqli_query($conn,$sql);
					$row = mysqli_fetch_array($result);
					
				?>
					
				<form action="update1.php?item_id=<?php echo $row['item_id']; ?>"  method="post">
				
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
						<td align="center" width="30%"> Item Status </td>
						<td ><select class="Minput"  name="item_status" value="<?php echo $row['item_status']; ?> "required>
							<option value="-">Please Choose</option>
							<option value="Retrieved">Retrieved</option>
    						<option value="Lost">Lost</option>
    						<option value="Pending">Pending</option></td><td>
    						
					</tr>
					
					<tr> 
						<td> </td>
						<td><input class="Lbtn" type="submit" name="submit" value="submit"></td>
					</tr>
				
				</table>
			
				</form>
				
			</tr>
		</table>
	
	</div>
<div class="footer">

</div>

</body>
</html>