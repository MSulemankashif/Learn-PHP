<?php

$users = ["Suleman", "Ali", "Ahmed", "Usman", "Bilal", "Osama"];

// echo count($users) . "<br>";
// $count = 0;
// foreach($users as $user){
//     $count++;
//     echo $count. " ";
//     echo $user . "<br>";
// }

// if(is_array($users)){
//     echo "This is an array";
// }else{
//     echo "This is not an array";
// };

// echo "This count of array is ".count($users) . "<br>";

// unset($users[0]);
array_push($users, "hassan");
// array_pop($users);
// print_r($users);


array_push($users, "Hussain", "Bilal", "Waseem");
array_pop($users);
$count = 0;
foreach($users as $data){
    $count++;
    echo $count . " ". $data . "</br>";
}
