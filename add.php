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
				<td width="20%" align="center"><h2><font color="#1896e2">Register new lost item</font></h2></td>
			<td><hr></td>
		</table>
		<!-- register books content -->

						
		
				<form action="upload.php" method="post" enctype="multipart/form-data">
    					<table align="center" border="0" width="40%" cellpadding="5" cellspacing="0">
						<tr> 
							<td align="center" width="30%">  Select image to upload: </td>
							<td><input type="file" name="fileToUpload" id="fileToUpload"></td>
						</tr>
						<tr> 
							<td align="center" width="30%"> Lost item details: </td>
							<td><input class="Minput" type="text" name="item_details" autofocus required></td>
						</tr>

						<tr> 
							<td align="center" width="30%"> Date of Lost:  </td>
							<td><input class="Minput" type="date" name="received_date" required></td>
						</tr>		
						<tr> 
							<td align="center" width="30%"></td>
							<td><input class="Lbtn" type="submit" name="submit" value="submit"></td>
						</tr>
				
						</table>
			
					</form>
				
	
	</div>
<div class="footer">

</div>

</body>
</html>