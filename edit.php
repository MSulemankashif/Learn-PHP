<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <?php
    include "config.php";

    $id = $_GET["userId"];

    $query = "SELECT * FROM tbl_user WHERE id=" . $id;
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);


    ?>

<body>
    <h2>Edit User</h2>
    <form action="editData.php">
        <input type="text" name="id" value="<?php echo $row['id']; ?>">
            <label for="name">Name:
                <input type="text" name="name" value="<?php echo $row['name'] ?>">
                </label>
            <label for="email">Email:
                <input type="email" name="email" value="<?php echo $row['email'] ?>">
            </label>
            <input type="submit" value="Update">
            


    </form>    

</body>
</html>