<?php
$host="localhost";
$username="root";
$password="";

// try{
//     $conn = new PDO("mysql:host=$host;dbname=college", $username, $password);
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo "Connected Successfully";
    
// }catch(PDOException $e){
//     echo "Connection Failed: ".$e->getMessage();
// }
try{
    $conn = new PDO("mysql:host=$host;dbname=college", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected Successfully";
    // $sql = "Insert into students (Name, Course, Batch, City, Year) values ('John', 'B.Tech', '2020', 'Karachi', '2025')";
    // $conn->exec($sql);
    // echo "Data Inserted Successfully";

}catch(PDOException $e){
    echo "Connection Failed: " . $e->getMessage();
}
