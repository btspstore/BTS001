<?php
// Database configuration
$host = "localhost";
$username = "root";
$password = "";
$database = "user";

// Establishing connection
$con = mysqli_connect($host, $username, $password, $database);

// Check connection
if (mysqli_connect_errno()) {
    error_log("Database connection failed: " . mysqli_connect_error());
    exit("Database connection failed. Please try again later.");
}
?>
