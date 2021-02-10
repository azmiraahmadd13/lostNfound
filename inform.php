<?php 
	include ('connection.php');
		
		$reportStatus = $_POST['reportStatus'];
		$item_id = $_POST['item_id'];
		

	$sql = mysqli_query($conn,"UPDATE student_report SET reportStatus ='$reportStatus'  WHERE item_id = '$item_id'");
	
	if($sql == TRUE){
		echo '<script language="javascript">';
		echo 'alert("Inform Successfully");';
		echo 'window.location.href="reportrecv.php"';
		echo'</script>';
	} else {
		echo "Error : ". $sql . "<br>" . $conn -> error;
	}
	$conn -> close();
	
?>