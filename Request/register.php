<?php

// print_r($_REQUEST);

foreach($_REQUEST as $key => $data){
    echo $key . " => ". $data;
    echo "<br>";
}