<?php
session_start();

// Unset all session variables
$_SESSION = [];

// Destroy the session
session_destroy();

// Redirect properly using PHP
header("Location: login.php");
exit();
