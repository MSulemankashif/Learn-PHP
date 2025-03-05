<?php

// $path = 'files';
// $items =scandir($path);
// $items = array_diff($items, array('.', '..'));
// // print_r($items); 

// echo "<h1>Files in the directory</h1>";
// foreach ($items as $item){
//     echo "<a href=./files/$item target=_blank> $item</a>";
//     echo "<br>";
// };

// $path = 'files';
// $items = scandir($path);
// $items = array_diff($items, array('.', ".."));

// echo "<h1>Please click on a file to read</h1>";
// foreach($items as $item){
//     // echo $item . "<br>";
//     echo "<a href='./files/'$item>$item</a>" . "<br>";
// };

$path = 'files';
$items = scandir($path);
$items = array_diff($items, array(".", ".."));

foreach($items as $item){
    echo "<a href=./files/$item>$item</a> <br>";
};