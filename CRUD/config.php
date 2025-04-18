<?php
$host = "localhost";
$dbname = "college";
$username = "root";
$password = "";

// $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
// $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password); 
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// if($conn) {
//     echo "Connected to the database successfully!";
// } else {
//     echo "Connection failed: " . $conn->errorInfo();
// }
