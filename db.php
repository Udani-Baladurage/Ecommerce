<?php
// Start session (needed for login and cart)
session_start();

// Database connection
$servername = "localhost";
$username = "root";       // default XAMPP username
$password = "";  // default XAMPP password is empty
$dbname = "ecommerce_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully"; // Optional test
?>
