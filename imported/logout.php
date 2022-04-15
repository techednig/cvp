<?php

// Inialize session
// session_start();

// Delete certain session
 //unset($_SESSION['uide']);
 // Delete all session variables
 @session_destroy();

// Jump to login page
$msg = "Logout Successful";
                $msgEncoded = base64_encode($msg);
                header("location:../login.php?msg=$msgEncoded");
 

?>
