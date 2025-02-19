<?php

if($_GET){
    echo "Your name is ". $_GET['username'];
    echo "<br>";
    echo "Your password is ". $_GET['password'];
} else if($_POST){
    echo "Your name is " .$_POST['username'];
    echo "<br>";
    echo "Your password is " .$_POST['password'];
}
else{
    echo "hello world";
};

