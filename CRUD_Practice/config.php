<?php
$host = 'localhost';
$dbname = 'college';
$username = 'root';
$password = "";

try{
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected Successfully";

}catch(PDOException $e){
    echo "Connection failed:" . $e->getMessage();
    echo "Connection failed:";
}
