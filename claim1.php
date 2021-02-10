<?php 
	include ('connection.php');
	
	//$book_name = $_POST['book_name'];
	//$username = $_GET['username'];
	//$quantity = $_POST['quantity'];
	//$price = $_POST['price'];
	
	$sql = mysqli_query($conn, "UPDATE lost_item SET item_id= '".$_POST['item_id']."',item_details='".$_POST['item_details']."',retrieved_by='".$_POST['retrieved_by']."',retrieval_date='".$_POST['retrieval_date']."'
	WHERE item_id ='".$_GET['item_id']."'");
	if($sql == TRUE){
		echo '<script language="javascript">';
		echo 'alert("Claim Successfully! Please go to FICTS to retrieved your item. Bring your Matric card for verification purpose");';
		echo 'window.location.href="student1.php";';
		echo'</script>';
	} else {
		echo "Error : ". $sql . "<br>" . $conn -> error;
	}
	$conn -> close();
	
?>