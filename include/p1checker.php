<?php
//$root = $_SERVER['DOCUMENT_ROOT'];
//include($root."/path/to/file.php");
if (isset($_SESSION['privilege'])) 
{
if (($_SESSION['privilege'] !== "1") && ($_SESSION['privilege'] !== "2")) 
{
header("location:../accessdenied.php");
}
}
?>