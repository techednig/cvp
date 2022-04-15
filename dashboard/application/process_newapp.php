<?php

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

if (isset($_POST['formsubmit'])) {

  $filename = $_FILES["fileToUpload"]["name"];

  $tempname = $_FILES["fileToUpload"]["tmp_name"];  

  $folder = "img_passport/".$filename;   

   
        $sql = "INSERT INTO candidates (form_no, sname, fname, oname, gender, state, phone1, phone2, email, nationality, dob, progname, progyr, stream, submit_state, photolink, entryby, updatedby) 
VALUES ('$form_no', '$sname', '$fname', '$oname', '$gender', '$state', '$phone1', '$phone2', '$email', '$nationality', '$dob', '$progname', '$progyr', '$stream', '1', '$folder', '$uid', '$uid')";
mysqli_query($db, $sql);
$new_id = mysqli_insert_id($db);
if (move_uploaded_file($tempname, $folder)) {

    $msg = "Form No: ".$form_no." and The file ". htmlspecialchars(basename($_FILES["fileToUpload"]["name"]))." has been uploaded.";
    $msgEncoded = base64_encode($msg);
header("location:newapp.php?msg=$msgEncoded newrecord=$new_id");

}else{

    $msg = "Sorry, there was an error uploading your file. Error:"  . $sql . "<br>" . mysqli_error($db). $new_id;
    $msgEncoded = base64_encode($msg);
header("location:newapp.php?msg=$msgEncoded");

}

}