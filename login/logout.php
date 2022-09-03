<?php
// Initialize the session
session_start();
 
// Unset all of the session variables
$_SESSION = array();
 
// Destroy session
session_destroy();
 
// Redirect to home page
header("Location: ../home.php");
exit;
?>