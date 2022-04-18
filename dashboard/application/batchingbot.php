<?php

include ("../../include/server.php");
include ("../../include/sessioncheck.php");
include ("../../include/p1checker.php");

$sql = "SELECT totalhallcap, grandhallcap FROM hallinfo WHERE hallid = 1";
$result = mysqli_query($db, $sql);
$row = mysqli_fetch_assoc($result);

$hallcap = $row['totalhallcap'];
$hallcapx = $row['grandhallcap'];

//find max batchid
$sql = "SELECT MAX(batchid) AS maxbatchid FROM candidates";
$result = mysqli_query($db, $sql);
$row = mysqli_fetch_assoc($result);
$maxbatchid = $row['maxbatchid'];

//count max batchid
$sql = "SELECT batchid FROM candidates WHERE batchid = $maxbatchid";
$result = mysqli_query ($db, $sql);
$countbatchid = mysqli_num_rows($result);

//start Batching

IF ($countbatchid < $hallcap){
    $sql = "UPDATE candidates SET batchid = $maxbatchid WHERE appid = $new_id";
    mysqli_query($db, $sql);
    $sql = "INSERT INTO batchtable (appid, batchid, seatno, updatedby) VALUES ('$new_id', '$maxbatchid', '$countbatchid' + 1, '$uid')";
    mysqli_query($db, $sql);
    
}
ELSE {
    $maxbatchid++;
    $countbatchid = 0;
    $sql = "UPDATE candidates SET batchid = $maxbatchid WHERE appid = $new_id";
    mysqli_query($db, $sql);
    $sql = "INSERT INTO batchtable (appid, batchid, seatno, updatedby) VALUES ('$new_id', '$maxbatchid', '$countbatchid' + 1, '$uid')";
    mysqli_query($db, $sql);
    

}

?>