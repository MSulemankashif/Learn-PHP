<?php

// Set cookie
$name = "Suleman";
setcookie("name", $name, time() + (86400 ));

// print_r($_COOKIE);
if(isset($_COOKIE['name'])){
    echo "Cookie is set";
}else{
    echo "Cookie not set";
}

