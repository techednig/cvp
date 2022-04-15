<?php

if (isset($_SESSION['privilege'])) 
{
if ($_SESSION['privilege'] !== "1")
{
header("location:../config/logout.php");
}
}
?>