<?php

include 'config.php';

$id = $_GET['userId'];

$query = "DELETE FROM tbl_user WHERE id = $id";

$result=mysqli_query($con, $query);

if ($result)
{
    echo '<script>alert ("User Deleted Sucessfully") </script>';
    echo '<script>window.location= "http://localhost/Learn-PHP/index.php";</script>';
} else {
    echo '<script> alert("Error")</script>';
    }
