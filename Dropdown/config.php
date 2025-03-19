<?php
$host = "localhost";
$dbname = "college";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if($conn){
    echo "Connected Succesfully <br> <br>";
}else{
    die ("There is an error while connecting to the database");
}