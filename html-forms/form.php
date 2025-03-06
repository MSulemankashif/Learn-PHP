<?php

// echo "<pre>";
// print_r($_POST);
if(isset($_POST['name'])){
    echo "Username is ". $_POST['name'];
    echo "<br>";
    echo "User email is " . $_POST["email"];
    echo "<br>";
    echo "User password is " . $_POST['password'];
    echo "<br>";
    echo "User skills is " . implode(", ", $_POST["skills"]);
    echo "<br>";
    if(!empty($_POST['bio'])){
        echo "User bio is " . $_POST['bio'];
    }else{
        echo "User bio is not set";
    };
};

