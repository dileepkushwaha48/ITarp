<?php
session_start();

// Destroy the session data
session_destroy();

// Redirect to the login page or any other desired page
header("Location: index.php"); // Change "login.php" to the appropriate page

exit();
?>