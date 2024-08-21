<?php
    include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Title</title>
</head>
<body>
    <center>
    <h1>Learn CRUD</h1></center>
        <h2>Create Your Account</h2>
            <form action="createData.php" method="POST">
                <label for="name">Username:
                    <input type="text" name="name" class="form-control">
                    </label>
                        <br>
                <label for="email">Email:
                    <input type="email" name="email" class="form-control">
                    </label>
                    <br>
                <input type="submit" value="Submit">
            </form>

           <h2>Users Data</h2> 
         
             

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>