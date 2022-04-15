<?php
$target_dir = "dashboard/img_passport/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

include ("../../include/server.php");
include ("../../include/sessioncheck.php");
include ("../../include/p1checker.php");

//Recover From Session
//$user_email = $_SESSION['user_email'];
//$user_email = base64_decode($user_email);
$uid = base64_decode($_SESSION['uid']);

$progname = mysqli_real_escape_string($db, $_POST['progname']);
$progyr = mysqli_real_escape_string($db, $_POST['progyr']);
$stream = mysqli_real_escape_string($db, $_POST['stream']);
$form_no = mysqli_real_escape_string($db, $_POST['form_no']);
$sname = mysqli_real_escape_string($db, $_POST['sname']);
$fname = mysqli_real_escape_string($db, $_POST['fname']);
$oname = mysqli_real_escape_string($db, $_POST['oname']);
$dob = mysqli_real_escape_string($db, $_POST['dob']);
$gender = mysqli_real_escape_string($db, $_POST['gender']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$phone1 = mysqli_real_escape_string($db, $_POST['phone1']);
$phone2 = mysqli_real_escape_string($db, $_POST['phone2']);
$state = mysqli_real_escape_string($db, $_POST['state']);
$nationality = mysqli_real_escape_string($db, $_POST['nationality']);

// Capture Form Input
if (isset($_POST['formsubmit'])) 
{

// Check if image file is a actual image or fake image
//if(isset($_POST["formsubmit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
 //   echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
     $uploadOk = 0; 
    $msg = "Attached File is not an Image.";
                      $msgEncoded = base64_encode($msg);
                      header("location:newapp.php?msg=$msgEncoded");
    
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  $msg = "Sorry, Image File Already Exists.";
    $uploadOk = 0;
                          $msgEncoded = base64_encode($msg);
                header("location:newapp.php?msg=$msgEncoded");
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 2000000) {
  $msg = "Sorry, Your Image File is too Large.";
  $uploadOk = 0;
   
                     $msgEncoded = base64_encode($msg);
                header("location:newapp.php?msg=$msgEncoded");
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  $msg = "Sorry, only JPG, JPEG, PNG & GIF Files are Allowed.";
  $uploadOk = 0;
                        $msgEncoded = base64_encode($msg);
                header("location:newapp.php?msg=$msgEncoded");
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  $msg= "Sorry, Candidate Info not Captured and your Image File was not Uploaded.";
                        $msgEncoded = base64_encode($msg);
                header("location:newapp.php?msg=$msgEncoded");
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    $sql = "INSERT INTO  candidates (form_no, sname, fname, oname, gender, state, phone1, phone2, email, nationality, dob, progname, progyr, stream, submit_state, photolink, entryby, updatedby) 
VALUES ('$form_no', '$sname', '$fname', '$oname', '$gender', '$state', '$phone1', '$phone2', '$email', '$nationality', '$dob', '$progname', '$progyr', '$stream', '1', '$target_file', '$uid', '$uid')";
$insert = mysqli_query($db, $sql);
$new_id = mysqli_insert_id($db);
  
    $msg = "Form No: ".$form_no." and The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"]))." has been uploaded.";
                          $msgEncoded = base64_encode($msg);
                header("location:newapp.php?msg=$msgEncoded newrecord=$new_id");
  } else {
    $msg = "Sorry, there was an error uploading your file. Error:"  . $sql . "<br>" . mysqli_error($db);
                          $msgEncoded = base64_encode($msg);
                header("location:newapp.php?msg=$msgEncoded");
  }
}

?>