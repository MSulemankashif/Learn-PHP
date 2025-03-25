<?php

include 'config.php';

$id = $_GET['id'];

$query = 'DELETE from students WHERE id = ' . $id;
$stmt = $conn->prepare($query);
$stmt->execute();

if($stmt){
    header('Location: ./index.php');
}else{
    echo "Error in deleting record";
}

