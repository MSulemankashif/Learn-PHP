<?php
include 'config.php';

$id = $_POST['id'];
$name = $_POST['name'];
$course = $_POST['course'];
$batch = $_POST['batch'];
$city = $_POST['city'];
$year = $_POST['year'];

$query = "UPDATE students SET name = '$name', course = '$course', batch = '$batch', city = '$city', year = '$year' WHERE id = $id";

if($conn->exec($query)){
    header('Location: ./index.php');
    echo "Data Inserted Successfully";
}else{
    echo "Error in updating record";
}
