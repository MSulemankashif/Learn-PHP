<?php

// remove and Add element is Array

$users = array("Usman","Ali","Ahmed","Suleman","Sameer");

// To add Element in Array
// array_push($users,1,"Ahmed","Karachi");

// To remove Element in Array
    //First Method
    array_pop($users);
    // Second Method
    array_splice($users,1,1);




echo "<pre>";
print_r($users);