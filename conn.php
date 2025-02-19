<?php
$servername = "localhost"; // Make sure MySQL is running on localhost
$username = "root"; // Default user for XAMPP
$password = ""; // Default password is empty in XAMPP
$database = "skilluser"; // Ensure this database exists in MySQL

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
