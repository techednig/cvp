<?php
include ("../../include/server.php");
include ("../../include/sessioncheck.php");
include ("../../include/p1checker.php");

$sql = "SELECT form_no FROM candidates WHERE form_no = $form_no";
$result = mysqli_query($db, $sql);
$row = mysqli_num_rows($result);

IF ($row >= 2){
    $msg = "The Form Number:".$form_no."Already Exists. Please Check For Duplicate";
    $msgEncoded = base64_encode($msg);
header("location:newapp.php?msg=$msgEncoded");
}



?>