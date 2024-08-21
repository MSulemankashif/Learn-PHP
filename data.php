<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include 'config.php' ?>
</head>
<body>
<h2>Users Data</h2> 
            <table border="1">
            <thead>
            <th>S.No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </thead>
            <tbody>
            <?php
            $query  = "SELECT * FROM tbl_user";

            $result =  mysqli_query($con, $query);
            $num = 1;
            while ($row = mysqli_fetch_assoc($result)) {  ?>
                <!-- while ($row = mysqli_fetch_row($result)) {     -->
                <tr>
                    <td><?php echo $num; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td>
                        <a href="edit.php?userId=<?php echo $row['id']; ?>">Edit</a> |
                        <a href="deleteData.php?userId=<?php echo $row['id']; ?>">Delete</a> 
                    </td>
                </tr>

            <?php
                $num++;
            }
            ?>

            </tbody>                    
            </table>
             
</body>
</html>