<?php
$root = $_SERVER['DOCUMENT_ROOT'];
//include($root."/path/to/file.php");
if (isset($_SESSION['privilege'])) 
{
if ($_SESSION['privilege'] !== "1")
{
header("location:../accessdenied.php");
}
}
?>