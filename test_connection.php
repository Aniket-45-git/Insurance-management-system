<?php
$servername = "localhost";  // Server name
$username = "root";         // MySQL username
$password = "";             // Leave blank if no password
$dbname = "assurance_management_system";  // Database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully!";
}
?>
