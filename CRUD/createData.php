
<?php
include 'config.php';

$username = $_POST['name'];
$useremail = $_POST['email'];


$query = "INSERT INTO tbl_user (`name`,`email`) values ('$username','$useremail')";

$result = mysqli_query($con, $query);


if ($result) {
    echo '<script>alert("User created sucessfully")</script>';
    echo '<script>window.location = "http://localhost/Learn-PHP/index.php";</script>';
    
} else {
    echo '<script>alert("Error")</script>';
}
