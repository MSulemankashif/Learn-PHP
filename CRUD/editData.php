<?php
include 'config.php';
// include 'edit.php';

$id = $_POST['id'];
$name = $_POST['name'];
$course = $_POST['course'];
$batch = $_POST['batch'];
$city = $_POST['City'];
$year = $_POST['year'];

$query = "UPDATE students SET name = '$name', course = '$course', batch = '$batch', city = '$city', year = '$year' WHERE id = $id";
$stmt = $conn->prepare($query);
// $stmt->execute([$name, $course, $batch, $city, $year, $id]);
$stmt->execute();


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
    echo "No Change Detected";
};
