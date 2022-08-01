<?php
include ("../../include/server.php");
include ("../../include/sessioncheck.php");
include ("../../include/p4checker.php");

//Recover Info From Session
//$a_email = $_SESSION['a_email'];
//$a_email = base64_decode($a_email);

$uid = base64_decode($_SESSION['uid']);
$role = $_SESSION['role'];
//$a_fname  = $_SESSION['a_fname'];
//$a_lname = $_SESSION['a_lname'];

//$app_id = $row['app_id'];

$sql = "SELECT * FROM `batchtable` WHERE `appid` = '$app_id'";
$query = mysqli_query($db, $sql);
$rowbatchtable = mysqli_fetch_assoc($query);
$seatno = $rowbatchtable['seatno'];
// if ($seatno !== null) {
//     $seatno = "Any";
//     echo
// }
if (($seatno > 122) && ($seatno <= 160)){
$sql = "UPDATE `batchtable` SET `batchtable.hall` = 'A' WHERE `appid` = $app_id";
$query = mysqli_query($db, $sql);
$sql = "UPDATE `batchtable` SET `batchtable.updatedby` = $uid WHERE `appid` = $app_id";
$query = mysqli_query($db, $sql);
}
elseif (($seatno > 0) && ($seatno <= 19)){
    $sql = "UPDATE `batchtable` SET `batchtable.hall` = 'D' WHERE `appid` = $app_id";
$query = mysqli_query($db, $sql);
$sql = "UPDATE `batchtable` SET `batchtable.updatedby` = $uid WHERE `appid` = $app_id";
$query = mysqli_query($db, $sql);
}
elseif (($seatno > 19) && ($seatno <= 69)){
$sql = "UPDATE `batchtable` SET `batchtable.hall` = 'C' WHERE `appid` = $app_id";
$query = mysqli_query($db, $sql);
$sql = "UPDATE `batchtable` SET `batchtable.updatedby` = $uid WHERE `appid` = $app_id";
$query = mysqli_query($db, $sql);
}
else
//IF (($seatno > 69) && ($seatno <= 122))
{
$sql = "UPDATE `batchtable` SET `batchtable.hall` = 'B' WHERE `appid` = $app_id";
$query = mysqli_query($db, $sql);
$sql = "UPDATE `batchtable` SET `batchtable.updatedby` = $uid WHERE `appid` = $app_id";
$query = mysqli_query($db, $sql);
}
?>