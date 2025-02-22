<?php

// print_r($_FILES);

// if($_FILES['fileUpload']['name']){
//     $path = $_FILES['fileUpload']['name'];
//     $upload_path = './uploads/'.$path;
//     if(move_uploaded_file($_FILES['fileUpload']['tmp_name'], $upload_path)){
//         echo 'File Uploaded';
//     }else{
//         die ('File not uploaded');
//     };
// }

// Practice
// print_r($_FILES);

if($_FILES['fileUpload']['name']){
    $path = './uploads/'.$_FILES['fileUpload']['name'];
    if(move_uploaded_file($_FILES['fileUpload']['tmp_name'], $path)){
        echo 'File Uploaded';
    } else{
        die('File not uploaded');
    };
}