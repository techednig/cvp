<?php

include ("../../include/server.php");
include ("../../include/sessioncheck.php");
include ("../../include/p1checker.php");


//Recover From Session
//$user_email = $_SESSION['user_email'];
//$user_email = base64_decode($user_email);
$uid = base64_decode($_SESSION['uid']);

//Get Candidate App Number
$app_id = $_GET['app_id'];

$progname = mysqli_real_escape_string($db, $_POST['progname']);
$progyr = mysqli_real_escape_string($db, $_POST['progyr']);
$stream = mysqli_real_escape_string($db, $_POST['stream']);
$form_no = mysqli_real_escape_string($db, $_POST['form_no']);
//$sname = mysqli_real_escape_string($db, $_POST['sname']);
//$fname = mysqli_real_escape_string($db, $_POST['fname']);
//$oname = mysqli_real_escape_string($db, $_POST['oname']);
$dob = mysqli_real_escape_string($db, $_POST['dob']);
$gender = mysqli_real_escape_string($db, $_POST['gender']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$phone1 = mysqli_real_escape_string($db, $_POST['phone1']);
$phone2 = mysqli_real_escape_string($db, $_POST['phone2']);
$state = mysqli_real_escape_string($db, $_POST['state']);
$nationality = mysqli_real_escape_string($db, $_POST['nationality']);

//Check for duplicate form number
$sql = "SELECT `form_no` FROM `candidates` WHERE `form_no` = $form_no";
$result = mysqli_query($db, $sql);
$row = mysqli_num_rows($result);
$assoc = mysqli_fetch_array($result, MYSQLI_ASSOC);
$old_formno = $assoc['form_no'];

if ($row > 1){
    $msg = "The Form Number: ".$form_no." Already Exists. Please Investigate Duplicate Form Number";
    $msgEncoded = base64_encode($msg);
header("location:editapp.php?msg=$msgEncoded");
}
else {

    // Start Checking Passport Info and Insert Record
if (isset($_POST['formsubmit'])) {

  $filename = $_FILES["fileToUpload"]["name"];
  $tempname = $_FILES["fileToUpload"]["tmp_name"];  

  //Set Image Folder Directory 
  $folder = "img_passport/".$filename;

//With Insert Photolink - $sql = "UPDATE `candidates` SET `form_no` = '$form_no', `gender` = '$gender', `state` = '$state', `phone1` = '$phone1', `phone2` = '$phone2', `email` = '$email', `nationality` = '$nationality', `dob` = '$dob', `progname` = '$progname', `progyr` = '$progyr', `stream` = '$stream', `photolink` = '$folder', `updatedby` = '$uid' WHERE `candidates`.`form_no` = '$old_formno'";  

$sql = "UPDATE `candidates` SET `form_no` = '$form_no', `gender` = '$gender', `state` = '$state', `phone1` = '$phone1', `phone2` = '$phone2', `email` = '$email', `nationality` = '$nationality', `dob` = '$dob', `progname` = '$progname', `progyr` = '$progyr', `stream` = '$stream', `updatedby` = '$uid' WHERE `candidates`.`form_no` = '$old_formno'";  


mysqli_query($db, $sql);

if(is_uploaded_file($_FILES['fileToUpload'])){
  //echo $_FILES["fileToUpload"]["tmp_name"];
  //exit;
}
if (move_uploaded_file($tempname, $folder)) {

    $msg = "Form No: ".$form_no." and The file ".htmlspecialchars(basename($_FILES["fileToUpload"]["name"]))." has been uploaded.";
    $msgEncoded = base64_encode($msg);
header("location:editapp.php?msg=$msgEncoded");

} else{

    $msg = "Record Changed. But Image was not Uploaded. Form Number:".$form_no;
    $msgEncoded = base64_encode($msg);
header("location:editapp.php?msg=$msgEncoded");

}

}
}
?>