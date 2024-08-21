<?php
include 'config.php';

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];

$query = "UPDATE tbl_user SET `name`= '$name', `email` = '$email' WHERE id='$id'";

$result = mysqli_query($con, $query);


if ($result)
{
    echo '<script> alert("User Updated Sucessfully") </script>';
    echo '<script>window.location = "http://localhost/learn-PHP/index.php";</script>';
} else {
echo '<script>  alert ()"Error"</script>';
}
