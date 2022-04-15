<?php
	
	if($_SESSION['uide'] = ""){
	
	$msg = "Please Login Again";
                $msgEncoded = base64_encode($msg);
                header("location:../../index.php?msg=$msgEncoded");
	
	}

if (isset($_SESSION["uide"])) {
  
  if ((time() - $_SESSION['last_login_timestamp']) > 2400) {
  $msg = "Sorry! Please Login Again";
                $msgEncoded = base64_encode($msg);
                header("location:../../index.php?msg=$msgEncoded");
     
          exit;
    
  } else {
    $_SESSION['last_login_timestamp'] = time();
  }
}
?>