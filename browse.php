<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];  
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `lost_item` WHERE CONCAT(`item_details`, `received_date`, `file_path`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `lost_item`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "lostnfound");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
							
							
}

?>

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
				<td width="20%" align="center"><h2><font color="#1168da">Browse lost items</font></h2></td>
			<td><hr></td>
		</table>
		<!-- List of books content -->
				<form action="browse.php" method="post">
				<table align="center" border="0" width="40%" cellpadding="5" cellspacing="0">
				
					<tr> 
						<td align="center" width="30%"> Lost item detail:  </td>
						<td><input class="Minput" type="text" name="valueToSearch" required></td>
					</tr>
					
						
					<tr> 
						<td align="center" width="30%"></td>
						<td><input class="Lbtn" type="submit" name="search" value="Filter"></td>
					</tr>
		
				<form action="" method="post">
				
				<table align="center" border="0" width="70%" cellpadding="5" cellspacing="0">
					<tr  align="center"> 
						
						<td width="7%" style="background-color: #ededed;">No.</td>
						<td width="20%" style="background-color: #ededed;">Lost items details</td>
						<td width="10%" style="background-color: #ededed;">Received date</td>
						<td width="10%" style="background-color: #ededed;">Retrieval date</td>
						<td width="10%" style="background-color: #ededed;">Item Image</td>
						<td width="15%" style="background-color: #ededed;">Item Status</td>
					</tr>
					
					<?php 
						$no = 0;
					while($row = mysqli_fetch_array($search_result)):?>
						
					<tr> 
						<td style="border-bottom: 1px solid #b3b3b3;" align="center"><?php echo ++$no; ?></td>
						<td style="border-bottom: 1px solid #b3b3b3;"><?php echo $row['item_details']; ?></td>
						<td style="border-bottom: 1px solid #b3b3b3;" align="center"><?php echo $row['received_date']; ?></td>
						<td style="border-bottom: 1px solid #b3b3b3;" align="center"><?php echo $row['retrieval_date']; ?></td>
						<td style="border-bottom: 1px solid #b3b3b3;" align="center"><img src="<?php echo $row['file_path']; ?>"  width="350" height="350"></td>
						<td style="border-bottom: 1px solid #b3b3b3;" align="center"><?php echo $row['item_status']; ?></td>
						
					</tr>
					 
						<?php endwhile;?>
				
				</table>
			
				</form>
				
			
		</table>
	
	</div>

</body>
</html>