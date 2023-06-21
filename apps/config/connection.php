<?php
$servername = "localhost"; // Replace with your server name
$username = "your_username"; // Replace with your database username
$password = "your_password"; // Replace with your database password
$database = "your_database"; // Replace with your database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Perform database operations here

// Close the connection
$conn->close();
?>
