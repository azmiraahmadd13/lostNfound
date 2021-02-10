<?php 
	include ('connection.php');
	
	$item_lost = $_POST['item_lost'];
	$report_by = $_POST['report_by'];
	$path = $_POST['file_path'];
	$received_date = $_POST['received_date'];

	//$received_date = $_POST['received_date'];

	$sql = mysqli_query($conn,"INSERT INTO lost_item (item_lost,report_by,fileToUpload,received_date)
	VALUES ('$item_lost','$report_by','$fileToUpload','received_date')");
	
	if($sql == TRUE) {
		echo '<script language="javascript">';
		echo 'alert("Insert Successfully");';
		echo 'window.location.href="report.php";';
		echo'</script>';
	}else {
			echo "Error : ". $sql . "<br>" . $conn -> error;
	}
	$conn -> close();


	
?>
	