<?php

$server = 'localhost';
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password);

//Check connection
if(!$con){
    die("Connection failed: ".mysqli_connect_error());
}
// echo "Connected successfully";

$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_['gen'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$desc= $_POST['desc'];

$sql = "INSERT into `members` ('name','age','gender','email','phone','other','dt') VALUES ($name, $age, $gender, $email, $phone, $desc, current_timestamp());";

echo $sql;