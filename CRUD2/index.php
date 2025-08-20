<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
        <h1 align="center">Users CRUD</h1>
    </div>   
</body>
</html>
<?php
$stmt = $conn->prepare('SELECT * FROM Users');
?>