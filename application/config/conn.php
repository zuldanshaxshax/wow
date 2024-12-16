<?php
// Database connection parameters
$host = 'localhost'; // Change to your database host
$username = 'root'; // Change to your database username
$password = ''; // Change to your database password
$database = 'elearning_bd'; // Change to your database name

// Establish a database connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>