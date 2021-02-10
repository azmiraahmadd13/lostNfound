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
    $item_lost = $_POST['item_lost'];;
     $matric_no = $_POST['matric_no'];
     $report_date = $_POST['report_date'];;
     $reportStatus = $_POST['reportStatus'];
   


$target_dir = "imagesLost/";
$target_file = $target_dir . basename($_FILES["fileToUploadLost"]["name"]);
$uploadOk = 1;

$ext = basename($_FILES["fileToUploadLost"]["name"]);
$name = md5(rand()). '' . $ext;
$target_file =  $target_dir . $name;
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUploadLost"]["tmp_name"]);
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
if ($_FILES["fileToUploadLost"]["size"] > 500000) {
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
    if (move_uploaded_file($_FILES["fileToUploadLost"]["tmp_name"], $target_file)) {
        
        $sql = "INSERT INTO `student_report` (`item_id`,`matric_no`, `item_lost` ,`lost_path`, `report_date`, `reportStatus` ) VALUES (NULL, '$matric_no','$item_lost','$target_file',   '$report_date', '$reportStatus');";  

        if(mysqli_query($conn, $sql))  
          {  
            echo"<script>alert('Report Sent');</script>";
               echo "<script>window.location.assign('report.php')</script>";
          }  
       
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
}
?>