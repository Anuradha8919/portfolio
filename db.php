<?php
$servername = "localhost";
$username = "root";  // Default user in XAMPP
$password = "";      // Default password in XAMPP is empty
$database = "portfolio_db";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
