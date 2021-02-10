<?php 
	include ('connection.php');
	
	$sql = mysqli_query($conn,"DELETE FROM lost_item WHERE item_id = '".$_GET['item_id']."'");
	
	if($sql == TRUE){
		echo '<script language="javascript">';
		echo 'alert("Delete Successfully");';
		echo 'window.location.href="action.php"';
		echo'</script>';
	} else {
		echo "Error : ". $sql . "<br>" . $conn -> error;
	}
	$conn -> close();
	
?>