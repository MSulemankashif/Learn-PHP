<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="style.css">
<title>CRUD</title>
</head>
<body>
    <h1 align="center">Create User</h1>
        <a href="./createData.php" class="btn btn-success m-4">Create User</a>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>


<?php 
    include 'config.php';

 $stmt = $conn->prepare('SELECT * FROM students');
 $stmt->execute();
 $result = $stmt->fetchAll();

// $name = $result[0]['Name'];
// $course = $result[0]['Course'];
// $batch = $result[0]['Batch'];
// print_r($name);
// echo "<br>";
// print_r($course);
// echo "<br>";
// print_r($batch);
// echo "<br>";

echo "<div class='container-fluid'>";
echo '<table border="1" class="table table-striped">
        <tr>
            <th>Name</th>
            <th>Course</th>
            <th>Batch</th>
            <th>City</th>
            <th>Year</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>';

foreach($result as $student){
    echo '<tr>
            <td>'.$student["Name"].'</td>
            <td>'.$student["Course"].'</td>
            <td>'.$student["Batch"].'</td>
            <td>'.$student["City"].'</td>
            <td>'.$student["Year"].'</td>
            <td><form method="post" action="editData.php">
                <button class="btn btn-outline-primary">Edit</button>
            </form>
            </td>
            <td><form method="post" action="editData.php">
                <button class="btn btn-danger">Delete</button>
            </form>
            </td>
        </tr>';
    }

    '</table> </div>';
