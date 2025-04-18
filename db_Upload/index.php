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
<title>Upload</title>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <div class="container mt-5">
            <h1>Form</h1>
            <label for="name"></label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your Name" required class="form-control">
            <label for="age"></label>
            <input type="number" class="form-control" id="age" name="age" placeholder="Enter your Age" required class="form-control">
            <label for="city"></label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Enter your City" required class="form-control">
            <label for="file"></label>
            <input type="file" class="form-control" id="file" name="file" required class="form-control">
            <br>
            <button class="btn btn-success" name="submit">Submit</button>
        </div>
    </form>

    <?php
        if(isset($_GET['success'])){
            echo "<script>alert('Record Inserted Successfully')</script>";
        }else if (isset($_GET['error'])){
            echo "<script>alert('Record Insertion failed')</script>";
        }
    ?>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>