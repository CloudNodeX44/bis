<?php
// Database credentials
$host = 'localhost';  // Replace with your database host
$dbname = 'barangay';  // Replace with your database name
$username = 'root';  // Replace with your database username
$password = '';  // Replace with your database password

// Create a MySQLi connection
$conn = mysqli_connect($host, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// echo "Connected successfully";
?>