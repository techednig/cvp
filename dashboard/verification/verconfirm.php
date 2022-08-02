<?php
include ("../../include/server.php");
include ("../../include/sessioncheck.php");
//include ("../../include/p4checker.php");

//Recover Info From Session
//$a_email = $_SESSION['a_email'];
//$a_email = base64_decode($a_email);

$uid = base64_decode($_SESSION['uid']);
$role = $_SESSION['role'];

// if (isset($_GET['verifybtn'])) {
$app_id = $_POST['app_id'];
$stat="1";
$sql5 = "UPDATE batchtable SET batchtable.updatedby = '".$uid."' WHERE appid = '".$app_id."'";
                $query5 = mysqli_query($db, $sql5);
                $sql6 = "UPDATE batchtable SET batchtable.attendance_status = '".$stat."' WHERE appid = '".$app_id."'";
                $query6 = mysqli_query($db, $sql6);

                $msg = "Verification Complete For Candidate Appid: $app_id";
                $msgEncoded = base64_encode($msg);
                            header("Location:verifycand.php?msg=$msgEncoded searchparam=$app_id");
         
// }

?>