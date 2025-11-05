<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Users Crud</title>
</head>
<body>
    <div class="container-fluid">
        <h1 align="center">Users CRUD</h1>
    </div>   
</body>
</html>
<?php
   $stmt = $conn->prepare("SELECT * FROM students");
   $stmt->execute();
   $result = $stmt->fetchAll();

//    print_r($result);

echo "<div class='container'>
    <table class='table table-striped'>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Course</th>
            <th>City</th>
            <th>Year</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>";
    $count = 1;
    foreach($result as $students){
        echo "<tr>
            <td>$count</td>
            <td>{$students['Name']}</td>
            <td>{$students['Course']}</td>
            <td>{$students['City']}</td>
            <td>{$students['Year']}</td>

            <form action='editData.php' method='post'>
                <input type='hidden' value='{$students['id']} name='id'>
                <td> <a href='#' class='btn btn-primary'>Edit</a> </td>
            </form>

            <form action='deleteData.php' method='post'>
                <input type='hidden' value='{$students['id']}' name='id'>
                <td> <a href='#' class='btn btn-danger'>Delete</a> </td>
            </form>
        </tr>";
        $count++;
        echo "</table></div>";
    }
?>