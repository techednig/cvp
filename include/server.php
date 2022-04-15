<?php

@session_start();

// initializing variables

$a_email = "";

$msg = "";

// connect to the database

$db = mysqli_connect('localhost','root','', 'fctson');

if ($db === false){
die("ERROR: Could not connect to Database. " . mysqli_connect_error());
}

?>