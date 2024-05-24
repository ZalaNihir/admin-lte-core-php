<?php


$servername = "localhost";
$username = "root";
$password = "";
$database = "demolte";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// echo "<script>alert('Connection done')</script>";