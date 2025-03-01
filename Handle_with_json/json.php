<?php
// $user = ["name"=>"Suleman","age"=>20,"email"=>"suleman@gmail.com"];
// echo json_encode($user); // Prints data in Object format

$data = '{"name":"Suleman","age":20,"email":"suleman@gmail.com"}';
$dataArray = json_decode($data,true);
echo "<pre>";
print_r($dataArray); // Prints data in Array format
