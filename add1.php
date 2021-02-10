<?php 
	include ('connection.php');
	
	$item_id = $_POST['item_id'];
	$item_details = $_POST['item_details'];
	//$received_date = $_POST['received_date'];
	$sql = mysqli_query($conn,"INSERT INTO lost_item (item_id,item_details)
	VALUES ('$item_id','$item_details')");
	
	if($sql == TRUE) {
		echo '<script language="javascript">';
		echo 'alert("Insert Successfully");';
		echo 'window.location.href="add.php";';
		echo'</script>';
	}else {
			echo "Error : ". $sql . "<br>" . $conn -> error;
	}
	$conn -> close();
	
?>
	