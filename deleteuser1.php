<?php 
	include ('connection.php');
	
	$sql = mysqli_query($conn,"DELETE FROM user WHERE matric_no = '".$_GET['matric_no']."'");
	
	if($sql == TRUE){
		echo '<script language="javascript">';
		echo 'alert("Delete Successfully");';
		echo 'window.location.href="deluser.php"';
		echo'</script>';
	} else {
		echo "Error : ". $sql . "<br>" . $conn -> error;
	}
	$conn -> close();
	
?>