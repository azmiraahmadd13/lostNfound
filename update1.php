<?php 
	include ('connection.php');
	
	//$book_name = $_POST['book_name'];
	//$username = $_GET['username'];
	//$quantity = $_POST['quantity'];
	//$price = $_POST['price'];
	
	$sql = mysqli_query($conn, "UPDATE lost_item SET item_id= '".$_POST['item_id']."',item_details='".$_POST['item_details']."',item_status='".$_POST['item_status']."'
	WHERE item_id ='".$_GET['item_id']."'");
	if($sql == TRUE){
		echo '<script language="javascript">';
		echo 'alert("Update Successfully");';
		echo 'window.location.href="action.php";';
		echo'</script>';
	} else {
		echo "Error : ". $sql . "<br>" . $conn -> error;
	}
	$conn -> close();
	
?>