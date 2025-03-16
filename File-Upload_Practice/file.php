<?php
// print_r($_FILES);

if($_FILES['file']['name']){
    $path = './uploads/'. $_FILES['file']['name'];
    if(move_uploaded_file($_FILES['file']['tmp_name'], $path)){
        echo "File Uploaded Succesfully";
    }else{
        echo 'There is an error';
    }
}