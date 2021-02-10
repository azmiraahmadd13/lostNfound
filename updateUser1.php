<?php 
	include ('connection.php');
	
	//$book_name = $_POST['book_name'];
	//$username = $_GET['username'];
	//$quantity = $_POST['quantity'];
	//$price = $_POST['price'];
	
	$sql = mysqli_query($conn, "UPDATE user SET matric_no= '".$_POST['matric_no']."',Fname='".$_POST['Fname']."', cnum='".$_POST['cnum']."'
	WHERE matric_no ='".$_GET['matric_no']."'");
	if($sql == TRUE){
		echo '<script language="javascript">';
		echo 'alert("Update Successfully");';
		echo 'window.location.href="deluser.php";';
		echo'</script>';
	} else {
		echo "Error : ". $sql . "<br>" . $conn -> error;
	}
	$conn -> close();
	
?>