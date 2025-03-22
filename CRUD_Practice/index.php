<?php 
    include 'config.php';

 $stmt = $conn->prepare('SELECT * FROM students');
 $stmt->execute();
 $result = $stmt->fetchAll();

//  print_r($result);

$name = $result[0]['Name'];
$course = $result[0]['Course'];
$batch = $result[0]['Batch'];
print_r($name);
echo "<br>";
print_r($course);
echo "<br>";
print_r($batch);
echo "<br>";


