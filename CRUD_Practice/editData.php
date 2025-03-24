<?php
include 'config.php';

$id = $_POST['id'];
$name = $_POST['name'];
$course = $_POST['course'];
$batch = $_POST['batch'];
$city = $_POST['City'];
$year = $_POST['year'];

$query = "UPDATE students SET name = '$name', course = '$course', batch = '$batch', city = '$city', year = '$year' WHERE id = $id";
$conn->exec($query);

if($conn){
    header('Location: ./index.php');
    exit();
}else{
    echo "Error in updating record";
}

