<?php

if($_GET){
    echo "Your name is ". $_GET['username'];
    echo "<br>";
    echo "Your password is ". $_GET['password'];
} else{

    echo "hello world";
}

