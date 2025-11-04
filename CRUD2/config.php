<?php
$host = "localhost";
$dbname = "users";
$username = "root";
$password = "";

try{
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected Successfully";

}catch(PDOException $e){
    echo "Connection Failed: " . $e->getMessage();
}