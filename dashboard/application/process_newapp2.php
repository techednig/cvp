<?php
$target_file = $_FILES["fileToUpload"]["name"];
$target_dir = "../dashboard/img_passport/".$target_file;
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
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_dir)) {
        $sql = "INSERT INTO  candidates (form_no, sname, fname, oname, gender, state, phone1, phone2, email, nationality, dob, progname, progyr, stream, submit_state, photolink, entryby, updatedby) 
VALUES ('$form_no', '$sname', '$fname', '$oname', '$gender', '$state', '$phone1', '$phone2', '$email', '$nationality', '$dob', '$progname', '$progyr', '$stream', '1', '$target_file', '$uid', '$uid')";
$insert = mysqli_query($db, $sql);
$new_id = mysqli_insert_id($db);
        echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.".$new_id."New ID";
      } else {
        echo "Sorry, there was an error uploading your file.";
      }
    }
