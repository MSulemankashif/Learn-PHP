<?php
include_once 'config.php';
if(isset($_POST["submit"])){
    $name = $_POST['name'];
    $course = $_POST['course'];
    $batch = $_POST['batch'];
    $city = $_POST['city'];
    $year = $_POST['year'];
    try{
        // With Exec
        // $sql = "INSERT INTO students (Name, Course, Batch, City, `Year`) VALUES ('$name','$course','$batch','$city','$year')";
        // $conn->exec($sql);

        // With Execute
        $sql = "INSERT into students (Name, Course, Batch, City, Year) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$name, $course, $batch, $city, $year]);
        echo "Data Inserted Successfully";
    }catch(PdoException $e){
        echo "Data Insertion Failed: " . $e->getMessage();
    }
}else{
    echo "Data Not Inserted";
}