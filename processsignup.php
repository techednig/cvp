<?php

//Connect to DB

include('include/server.php');


// receive all input values from the form

if (isset($_POST['submit'])) {


$a_fname = mysqli_real_escape_string($db, $_POST['a_fname']);
$a_lname = mysqli_real_escape_string($db, $_POST['a_lname']);
$a_email = mysqli_real_escape_string($db, $_POST['a_email']);
$a_password = mysqli_real_escape_string($db, $_POST['a_password']);
$repassword = mysqli_real_escape_string($db, $_POST['repassword']);

// form validation: ensure that the form is correctly filled ...

if ($password !== $repassword) {

                $msg = "Passwords Mismatch, Try Again";
                $msgEncoded = base64_encode($msg);
                header("location:signup.php?msg=$msgEncoded");

}else{
// first check the database to make sure

// a user does not already exist with the same eid and/or email

$user_check_query = "SELECT * FROM `adminusers` WHERE `a_email` = '$a_email' LIMIT 1";

$result = mysqli_query($db, $user_check_query);

$user = mysqli_fetch_assoc($result);

//if ($user) { // if user exists


if ($user['a_email'] == $a_email) {


                $msg = "Your Email is already Registered";
                $msgEncoded = base64_encode($msg);
                header("location:signup.php?msg=$msgEncoded");
 
}

//}

// Finally, register user if there are no errors in the form
$tpend = mysqli_num_rows($result);
if ($tpend == 0) {

$password = md5($repassword);
//encrypt the password before saving in the database


$sql = "INSERT INTO adminusers (a_fname, a_lname, a_email, a_password, privilege) 
VALUES ('$a_fname', '$a_lname', '$a_email', '$password', 0)";


if (mysqli_query($db, $sql)) {
 $msg = "Registration Successful! Login to Continue";

$msgEncoded = base64_encode($msg);
                header("location:login.php?msg=$msgEncoded");

} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($db);
}



}
}
}
mysqli_close($db);
?>