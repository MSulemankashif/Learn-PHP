<?php
include "config.php";
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
<link rel="stylesheet" href="style.css">
<title>Create Data</title>
<style>
    header{
    display: flex;
    justify-content: space-between;
}
header li{
    display: inline;
    list-style-type: none;
    margin: 20px !important;
}
header ul{
    margin-top: 8px;
}
</style>
</head>
<body>
    <div class="container">
    <header>
        <h1>Create Data</h1>
        <nav>
            <ul>
                <li>Home</li>
                <li>Contact us</li>
                <li>About</li>
            </ul>
        </nav>
    </header>
        <form action="" method="post">
            <label for="name">Name :</label>
            <input type="text" name="name" placeholder="Enter your Name here" class="form-control" required>
        </form>
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>

