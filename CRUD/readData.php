<?php
include 'config.php';

$sql = "SELECT * FROM students";
$stmt = $conn->prepare($sql);
$stmt->execute();
$students = $stmt->fetchAll();

print_r($students);