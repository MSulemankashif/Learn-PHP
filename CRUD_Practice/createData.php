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
        <form action="createData.php" method="post">
            <label for="name">Name :</label>
            <input type="text" name="name" placeholder="Enter your Name here" class="form-control" required>
            <br>
            <label for="course">Course :</label>
            <div class="form-check">
              <input class="form-check-input" type="radio"  value="ADSE" name="course">
              <label class="form-check-label" for="flexRadioDefault1">
                ADSE
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" value="HDSE" name="course">
              <label class="form-check-label" for="flexRadioDefault2">
                HDSE
              </label>
            </div>
            <br>
            <label for="batch">Batch :</label>
            <input type="text" name="batch" placeholder="Enter your Batch here" class="form-control" required>
            <br>
            <label for="city">City :</label>
            <select name="city" class="form-select" required>
                <option>Select City</option>
                <option value="Karachi">Karachi</option>
                <option value="Lahore">Lahore</option>
                <option value="Islamabad">Islamabad</option>
                <option value="Multan">Multan</option>
                <option value="Faisalabad">Faisalabad</option>
                <option value="Peshawar">Peshawar</option>
            </select>
            <br>
            <label for="year">Year :</label>
            <input type="text" name="year" placeholder="Enter your Year here" class="form-control" required>

            <button class="btn btn-success mt-4">Submit</button>
        </form>
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>

<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST['name'];
        $course = $_POST['course'];
        $batch = $_POST['batch'];
        $city = $_POST['city'];
        $year = $_POST['year'];

     $query = "INSERT INTO students (name, course, batch, city, year) VALUES ('$name', '$course', '$batch', '$city', '$year')";
        if($conn->exec($query)){
            echo "Data Inserted Successfully";
            header('Location: index.php');
        }else{
            echo "There is an error while inserting data";
        }
    }
?>
