<?php
session_start();

// Set session variables for guest
$_SESSION['guest'] = true;
$_SESSION['username'] = 'guest';

// Redirect to the home page or any page that requires guest access
header("Location: ../index.php");
exit();
?>
