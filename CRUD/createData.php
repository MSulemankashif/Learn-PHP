<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Site</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="container">
      <header>
        <h1>PHP Form</h1>
        <nav>
          <ul>
            <li>Home</li>
            <li>Contact Us</li>
            <li>About</li>
          </ul>
        </nav>
      </header>
         <form action="createData.php" method="post">
             <label for="name" class="form-label">Name:</label>
             <input type="text" name="name" placeholder="Enter Your Name Here" class="form-control" required>
             <br>
             <label for="course" class="form-label">Course:</label>
             <span required>
             <div class="form-check">
                <input class="form-check-input" type="radio" value="ADSE" id="flexCheckDefault" name="course">
                <label class="form-check-label" for="flexCheckDefault">
                    ADSE
                </label>
             </div>
            <div class="form-check">
                  <input class="form-check-input" type="radio" value="HDSE" id="flexCheckChecked" name="course">
                  <label class="form-check-label" for="flexCheckChecked">
                    HDSE
                  </label>
            </div>
            </span>
             <br>
             <label for="batch" class="form-label">Batch:</label>
             <input type="text" name="batch" placeholder="Enter Your Batch Code Here" class="form-control" required>
             <br>
             <label for="city" class="form-label">City:</label>
             <select name="city" class="form-select" required>
                <option>Select Your City</option>
                <option value="Karachi">Karachi</option>
                <option value="Lahore">Lahore</option>
                <option value="Lslamabad">Islamabad</option>
                <option value="Multan">Multan</option>
                <option value="Faisalabad">Faisalabad</option>
                <option value="Hyderabad">Hyderabad</option>
                <option value="Peshawar">Peshawar</option>
             </select>
             <br>
             <label for="year" class="form-label">Year:</label>
             <input type="text" name="year" placeholder="Enter Your Year Here" class="form-control" required>
             <br>

             <button class="btn btn-success">Submit</button>
         </form>
    </div>

</body>
</html>

<?php

if($_POST){
    $name = $_POST['name'];
    $course = $_POST['course'];
    $batch = $_POST['batch'];
    $city = $_POST['city'];
    $year = $_POST['year'];

    $sql = "INSERT INTO students (name, course, batch, city, year) VALUES ('$name', '$course', '$batch', '$city', '$year')";
    // $conn->exec($sql);

    if($conn->exec($sql)){
      header("Location: index.php");
        echo "Data Inserted Successfully";
    }else{
        echo "Data Insertion Failed";
    }
}
?>