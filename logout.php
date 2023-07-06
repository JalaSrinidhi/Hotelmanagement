<?php
// Start the PHP session
session_start();

// Destroy the session and clear session variables
$_SESSION = array();
session_destroy();

// Redirect the user to the login page
header("Location: index.html");
exit();
?>








