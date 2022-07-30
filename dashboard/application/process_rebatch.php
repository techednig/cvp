<?php

include ("../../include/server.php");
include ("../../include/sessioncheck.php");
include ("../../include/p1checker.php");


//Recover From Session
//$user_email = $_SESSION['user_email'];
//$user_email = base64_decode($user_email);
$uid = base64_decode($_SESSION['uid']);

//Get Candidate App Number
//$app_id = $_GET['rebatchbtn'];

//Recall appid From Session initialized in rebatch.php
$app_id = $_SESSION['c_app_id'];

$newbcode = mysqli_real_escape_string($db, $_POST['newbcode']);
$hall = mysqli_real_escape_string($db, $_POST['hall']);
$oldbatchnum = mysqli_real_escape_string($db, $_POST['batchnum']);

//Check and Validate the newly entered BCODE
//$findnewbcode = "SELECT `batchid` FROM `batchtable` WHERE `bcode` = $newbcode LIMIT 1";
//$exec = mysqli_query($db, $sql);
//$num_row = mysqli_num_rows($exec);
//$assoc = mysqli_fetch_array($exec, MYSQLI_ASSOC);
//$newbatchid = $assoc['batchid'];

//$_SESSION['newbcode2'] = $newbcode;
// $_SESSION['hall2'] = $hall;

//Check and Validate the newly entered BCODE
$sql = "SELECT * FROM `batchinfo` WHERE `bcode` LIKE '$newbcode' LIMIT 1";
$result = mysqli_query($db, $sql);
//$num_row = mysqli_num_rows($result);
$assoc = mysqli_fetch_assoc($result);
$newbatchid = $assoc['batchid'];


// Delete certain session
//unset($_SESSION['c_app_id']);


//Get Hall capacity Info
//$query = "SELECT * FROM `hallinfo` LIMIT 1";
//$exec = mysqli_query($db, $query);
//$hall = mysqli_fetch_array($exec, MYSQLI_ASSOC);
//$A = $hall['A'];


if (mysqli_num_rows($result) < 1){
    $msg = "The New Batch ID: ".$newbcode." Does Not Exist. Please Create it and Try Again. AppiD:$app_id";
    $msgEncoded = base64_encode($msg);
 
header("location:../rebatch.php?msg=$msgEncoded&rebatchbtn=$app_id");
}ELSE
if (mysqli_num_rows($result) == 1){
    //UPDATE candidate table and batchtable
//$sql = "UPDATE `candidates`, `batchtable` SET `candidates`.`batchid` = '$newbatchid' `batchtable`.`batchid` = '$newbatchid' `batchtable`.`hall` = '$hall' WHERE `candidates`.`appid` AND `batchtable`.`appid` = '$app_id'";
$sql = "UPDATE `candidates` SET `candidates`.`batchid` = $newbatchid WHERE `appid` = $app_id";
$result = mysqli_query($db, $sql);
$sql1 = "UPDATE `batchtable` SET `batchtable`.`batchid` = $newbatchid WHERE `appid` = $app_id";
$result = mysqli_query($db, $sql);
$msg = "Rebatch of Candidate with Appid: $app_id to New Batch: $newbcode Hall: $hall was Successful";
    $msgEncoded = base64_encode($msg);
    
header("location:../rebatch.php?msg=$msgEncoded&rebatchbtn=$app_id");
    //Count number of Students Present in the New Batch
    //$query= "SELECT `appid` FROM `candidates` WHERE `batchid` = $newbatchid";
    //$result = mysqli_query($db, $query);
    //$batch_pop = mysqli_num_rows($result);

}
else {

//Return Execution Error

$msg = "Unable to Perform Rebatch Request for Appid: $app_id : $newbcode : $hall : $newbatchid";
    $msgEncoded = base64_encode($msg);
    
header("location:../rebatch.php?msg=$msgEncoded&rebatchbtn=$app_id");


}



?>