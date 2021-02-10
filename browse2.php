
<?php
include ('connection.php');
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




<div id="sidemenu">
    <ul style="list-style-type:none;">
   	<li><a href="student1.php"> Lost Item list </a></li>
   	<li><a href="browse.php"> Search lost item</a></li>
    <li><a href="report.php"> Report lost item</a></li>
 </ul>	
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
				<table align="center" border="0" width="40%" cellpadding="5" cellspacing="0">
				
					<tr> 
						<td align="center" width="30%"> Lost item detail:  </td>
						<td><input class="Minput" type="text" name="item_details" required></td>
					</tr>
					
						
					<tr> 
						<td align="center" width="30%"></td>
						<td><input class="Lbtn" type="submit" name="search" value="search"></td>
					</tr>
					<?php

if(isset($_POST['search']))
{
	
    $item_details = $_POST['item_details'];
    
    // search in all table columns
    // using concat mysql function
    $query = "SELECT item_id, item_details, receeived_date, file_path FROM 'lost_item' WHERE item_details = '$item_details'";
    $result = mysqli_query($conn,$query);
	
	echo '<table align="center" border="0" width="70%" cellpadding="5" cellspacing="0">

					<tr  align="center"> 
						
						<td width="7%" style="background-color: #ededed;">No.</td>
						<td width="10%" style="background-color: #ededed;">Lost items details</td>
						<td width="10%" style="background-color: #ededed;">Date of lost</td>
						<td width="10%" style="background-color: #ededed;">Image</td>
						
						<td width="15%" style="background-color: #ededed;" colspan=2>Action</td>
					</tr>';
	if ($result == TRUE) {
		$no = 0;
		while($row = mysqli_fetch_array($result)){

			$item = $row['item_details'];
			$received_date = $row['received_date'];
			$file_path = $row['file_path'];
			$item_id = $row['item_id'];

			echo '<tr> 
						<td style="border-bottom: 1px solid #b3b3b3;" align="center"><?php echo ++$no; ?></td>
						<td style="border-bottom: 1px solid #b3b3b3;">'.$item.'</td>
						<td style="border-bottom: 1px solid #b3b3b3;" align="center">'.$received_date.'</td>
						<td style="border-bottom: 1px solid #b3b3b3;" align="center"> <img src="'.$file_path.'"  width="350" height="350"></td>
						<td style="border-bottom: 1px solid #b3b3b3;" align="center"><a href="claim.php?item_id='.$item_id.'" onClick="return confirm("")">Claim</a></td>
					</tr>
					';

		}
	}else{

	}

    
}
 /*else {
    $query = "SELECT * FROM 'lost_item'";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect('localhost','root','','lostnfound');
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}*/

?>

				</table>
			</form>
				<table align="center" border="0" width="70%" cellpadding="5" cellspacing="0">

					<tr  align="center"> 
						
						<td width="7%" style="background-color: #ededed;">No.</td>
						<td width="10%" style="background-color: #ededed;">Lost items details</td>
						<td width="10%" style="background-color: #ededed;">Date of lost</td>
						<td width="10%" style="background-color: #ededed;">Image</td>
						
						<td width="15%" style="background-color: #ededed;" colspan=2>Action</td>
					</tr>
					
					<?php 
						
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
						<td style="border-bottom: 1px solid #b3b3b3;" align="center"> <img src="<?php echo $row['file_path']; ?>"  width="350" height="350"></td>
						<td style="border-bottom: 1px solid #b3b3b3;" align="center"><a href="claim.php?item_id=<?php echo $row['item_id']; ?>" onClick="return confirm('Are You Sure?')">Claim</a></td>
					
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