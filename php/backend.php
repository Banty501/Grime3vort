<?php
session_start(); // Start sessions to track logged-in users

// Database connection settings
$servername = "localhost"; // MariaDB server
$username = "root";        // Database username
$password = "";            // Database password (empty by default)
$dbname = "grime3vort_db"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
