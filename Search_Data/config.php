<?php
$host = 'localhost';
$dbname = "college";
$username = "root";
$password = '';

// With MySQLi
// $conn = new mysqli($host, $username, $password, $dbname);
// if($conn->connect_error){
//     die("Connection failed: " . $conn->connect_error);
// }else{
//     echo "Connected successfully";
// }

// With PDO
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully With PDO";
}catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}
