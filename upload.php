<?php
include('connection.php');
$con = mysqli_connect("localhost","root","","lostnfound");
// Check connection
if (mysqli_connect_errno())
  {
    echo  '<div class="alert alert-danger"><strong>Error!</strong> Fail to connect to MySQL.</div>';

  }


  if(isset($_POST['submit']))
{
    $item_details = $_POST['item_details'];;
     $received_date = $_POST['received_date'];

$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;

$ext = basename($_FILES["fileToUpload"]["name"]);
$name = md5(rand()). '' . $ext;
$target_file =  $target_dir . $name;
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        
        $sql = "INSERT INTO `lost_item` (`item_id`, `item_details`, `file_path`, `received_date` ) VALUES (NULL, '$item_details', '$target_file', '$received_date');";  

        if(mysqli_query($conn, $sql))  
          {  
            echo"<script>alert('Data Saved');</script>";
               echo "<script>window.location.assign('add.php')</script>";
          }  
       
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
}
?>