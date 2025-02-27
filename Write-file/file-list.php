<?php

$path = 'files';
$items =scandir($path);
$items = array_diff($items, array('.', '..'));
// print_r($items); 

echo "<h1>Files in the directory</h1>";
foreach ($items as $item){
    echo "<a href=./files/$item target=_blank> $item</a>";
    echo "<br>";

}