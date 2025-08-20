<?php
$host = "localhost";
$dbname = "users";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if($conn){
    // echo "Connected Successfully";
}else{
    echo "Connection failed" . $conn->errorInfo();
}