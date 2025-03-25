<?php
include 'config.php';

$id = $_POST['id'];
$name = $_POST['name'];
$course = $_POST['Course'];
$batch = $_POST['batch'];
$city = $_POST['City'];
$year = $_POST['year'];

$query = "UPDATE students SET name = '$name', Course = '$course', batch = '$batch', city = '$city', year = '$year' WHERE id = $id";
$stmt = $conn->prepare($query);
$stmt->execute();

if($stmt){
    header('Location: ./index.php');
    exit();
}else{
    echo "Error in updating record";
}

