<?php


// receive all input values from the form

if (isset($_POST['addmeeting'])) {

include ('../include/server.php');
include ("../include/sessioncheck.php");
include ("../include/p1checker.php");

//Recover Info From Session
$user_email = $_SESSION['user_email'];
$user_email = base64_decode($user_email);

$uid = base64_decode($_SESSION['uid']);

$event_name = mysqli_real_escape_string($db, $_POST['event_name']);
$event_type = mysqli_real_escape_string($db, $_POST['event_type']);
//$event_status = mysqli_real_escape_string($db, $_POST['event_status']);
$host = mysqli_real_escape_string($db, $_POST['host']);
$venue = mysqli_real_escape_string($db, $_POST['venue']);
$other_CR = mysqli_real_escape_string($db, $_POST['other_CR']);
$from_date = mysqli_real_escape_string($db, $_POST['from_date']);
$to_date = mysqli_real_escape_string($db, $_POST['to_date']);
//$start_time = mysqli_real_escape_string($db, $_POST['start_time']);

$d1 = strtotime(".$from_date.");
$fromd = date('d-m-Y', $d1);
$fromt = date("h:i A", $d1);

//Fetch Registration & User Info of Associated eid
$queryuser = "SELECT fname, lname, user_orgdep, user_phone FROM users WHERE user_id= '$uid' && user_email='$user_email' LIMIT 1";
$user_row = mysqli_query($db, $queryuser);
$row_user = mysqli_fetch_array($user_row, MYSQLI_ASSOC);

$fname = $row_user["fname"] ;
$lname = $row_user["lname"] ;
$org_dep = $row_user["user_orgdep"] ;
$phone = $row_user["user_phone"] ;

$sql = "INSERT INTO events (event_name, event_type, event_status, host, venue, other_CR, from_date, to_date, start_time, entry_by, user_id, org_dep, phone) 
VALUES ('$event_name', '$event_type', 'Active', '$host', '$venue', '$other_CR', '$from_date', '$to_date', '$fromt', '$fname $lname', '$uid', '$org_dep', '$phone')";


if (mysqli_query($db, $sql)) {
 $msg = "Event Successfuly Added!";

$msgEncoded = base64_encode($msg);
                header("location:addnew.php?msg=$msgEncoded");

} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($db);
}



}
mysqli_close($db);
?>