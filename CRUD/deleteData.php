<?php
include 'config.php';

$id = $_GET['id'];

$query = "DELETE FROM students WHERE id = $id";
$stmt = $conn->prepare($query);
$stmt->execute();

if($stmt){
    header('Location: ./index.php');
    // exit();
}else{
    echo "Error in deleting record";
}