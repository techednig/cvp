<?php

include('include/server.php');

// LOGIN USER

if (isset($_POST['loginbtn'])) {

$a_email = mysqli_real_escape_string($db, $_POST['a_email']);
$a_password = mysqli_real_escape_string($db, $_POST['a_password']);

$a_password = md5($a_password);

// Match User Input to DB Data
//$query = "SELECT * FROM adminusers WHERE a_email='$a_email' AND a_password='$a_password'";
$query = "SELECT user_id, a_email, privilege FROM adminusers WHERE a_email ='$a_email' AND a_password ='$a_password'";

$record_row = mysqli_query($db, $query);

//Associative "Query" Array
$row = mysqli_fetch_array($record_row, MYSQLI_ASSOC);
$privi = $row['privilege'];

//Check Admin Account Status
$query_role = "SELECT roleid, status FROM roles WHERE roleid = '$privi'";
$role_row_query = mysqli_query($db, $query_role);

//Associative "Query_Role" Array
$role_row = mysqli_fetch_array($role_row_query, MYSQLI_ASSOC);


$uid = $row['user_id'];

if (mysqli_num_rows($record_row) == 0) {

$msg = "Invalid Username/ Password Combination";
                $msgEncoded = base64_encode($msg);
                header("location: index.php?msg=$msgEncoded");


}else 

if (mysqli_num_rows($role_row_query) == 0) {

    $msg = "Admin Privilege is Not SET, Contact WebMaster";
                    $msgEncoded = base64_encode($msg);
                    header("location: index.php?msg=$msgEncoded");
}
if (mysqli_num_rows($record_row) == 1 && $role_row["status"] < "1") {

$msg = "This Account is Not Active, Contact WebMaster";
                $msgEncoded = base64_encode($msg);
                header("location: index.php?msg=$msgEncoded");


}
if (mysqli_num_rows($record_row) == 1 && $row["privilege"] !== "0") {

//Encode Session Identifier
$a_email = base64_encode($a_email);
$uid= base64_encode($uid);
$uide = md5($a_email);
//Move Identifier Into Session
$_SESSION['a_email'] = $a_email;
$_SESSION['uid'] = $uid;
$_SESSION['uide'] = $uide;
//Privileger
$_SESSION['privilege'] = $privi;
//Timer
$_SESSION['last_login_timestamp'] = time();


header("location:dashboard/welcome.php?session=$uide authourization=$a_email uid=$uid");
}
}

?>
