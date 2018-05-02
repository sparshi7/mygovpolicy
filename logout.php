<?php 
//Destroy the session 
session_start(); 
session_unset(); 
session_destroy(); 
//Redirect to home page 
header("location:f1.html"); 
exit(); 
?>
