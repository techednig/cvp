<?php


if (isset($_GET['event_id']))
 {
    $event_id = $_GET['event_id']; 
    include_once ("../include/server.php");
    include_once ("../include/sessioncheck.php");
    include_once ("../include/p1checker.php");

     //Recover Info From Session
    $uid = $_SESSION['uid'];
    $uid = base64_decode($uid);
   

    
    $sql = "DELETE FROM events WHERE event_id = $event_id && user_id = $uid";
    $exec = mysqli_query($db, $sql);
           
        $msg = "Event was Successfully Deleted";
        $msg = base64_encode($msg);
        header('location:mymeeting.php?msg='.$msg.'');
   
 }   
     ELSE{
            $msg = "The Event to be Deleted Does not Exist";
            $msg = base64_encode($msg);
            header('location:mymeeting.php?msg='.$msg.'');
         }
        
?>