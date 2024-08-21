<?php
include 'config.php';

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];

$query = "UPDATE tbl_user SET `name`= '$name', `email` = '$email' WHERE id='$id'";
