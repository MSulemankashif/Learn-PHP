<?php
include_once 'config.php';
if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $city = $_POST['city'];
    $file = $_FILES['file']['name'];
    $temp_file = $_FILES['file']['tmp_name'];
    $path = "uploads/";
    $file_path = $path . $file;

    try{
        $query = "INSERT INTO users (Name, Age, City, pic) VALUES (?,?,?,?)";
        $stmt= $conn->prepare($query);
        $stmt->execute([$name, $age, $city, $file_path]);
        if($stmt) {
            move_uploaded_file($temp_file, $path . $file);
            echo "File uploaded successfully";
        } else {
            echo "Failed to upload file";
        }
    }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
    }
}else {
    echo "No file uploaded";
}