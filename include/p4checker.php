<?php

if (isset($_SESSION['privilege'])) 
{
    $privi = $_SESSION['privilege'];
    //print_r($privi);
if ($_SESSION['privilege'] !== 4)
{
header("location:../../dashboard/accessdenied.php");
}

}
?>