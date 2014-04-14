<?php    
session_start();

session_destroy();

$cdestino = "Location:../index.php";
header($cdestino);
exit();
?>