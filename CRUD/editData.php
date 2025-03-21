<?php
include 'config.php';
// include 'edit.php';

$id = $_POST['id'];
$name = $_POST['name'];
$course = $_POST['course'];
$batch = $_POST['batch'];
$city = $_POST['city'];
$year = $_POST['year'];

$query = "UPDATE students SET name = '$name', course = '$course', batch = '$batch', city = '$city', year = '$year' WHERE id = $id";
$stmt = $conn->prepare($query);
$stmt->execute([$name, $course, $batch, $city, $year, $id]);

// if($conn->exec($query)){
//     header('Location: ./index.php');
//     exit();
// }else{
//     echo "Error in updating record";
// }
if ($stmt->rowCount() > 0) {
    header('Location: ./index.php');
    exit();
} else {
    echo "Error in updating record or no changes made.";}
