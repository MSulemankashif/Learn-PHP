<?php
include 'config.php';

$id = $_GET['id'];

$query = 'SELECT * FROM students WHERE id = '. $id;
$stmt = $conn->prepare($query);
$stmt->execute();
$result = $stmt->fetch();


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
<title>Edit</title>
</head>
<body>
<div class="container">
    <header>
        <h1>Edit Data</h1>
        <nav>
            <ul>
                <li>Home</li>
                <li>Contact us</li>
                <li>About</li>
            </ul>
        </nav>
    </header>
        <form action="editData.php" method="post">
          <input type="hidden" name="id" value="<?php echo $result['id']?>">
            <label for="name">Name :</label>
            <input type="text" name="name" placeholder="Enter your Name here" class="form-control" required value="<?php echo $result['Name']?>">
            <br>
            <label for="course">Course :</label>
            <div class="form-check">
              <input class="form-check-input" type="radio"  value="ADSE" name="Course" <?php if($result['Course'] == 'ADSE') echo 'checked'?>>
              <label class="form-check-label" for="flexRadioDefault1">
                ADSE
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" value="HDSE" name="Course" <?php if($result['Course'] == 'HDSE') echo 'checked'?>>
              <label class="form-check-label" for="flexRadioDefault2">
                HDSE
              </label>
            </div>
            <br>
            <label for="batch">Batch :</label>
            <input type="text" name="batch" placeholder="Enter your Batch here" class="form-control" required value="<?php echo $result['Batch']?>">
            <br>
            <label for="City">City :</label>
            <select name="City" class="form-select" required>
                <option>Select City</option>
                <option value="Karachi" <?php if($result['City'] == 'Karachi') echo "selected"?>>Karachi</option>
                <option value="Lahore" <?php if($result['City'] == 'Lahore') echo "selected"?>>Lahore</option>
                <option value="Islamabad" <?php if($result['City'] == 'Islamabad') echo "selected"?>>Islamabad</option>
                <option value="Multan" <?php if($result['City'] == 'Multan') echo "selected"?>>Multan</option>
                <option value="Faisalabad" <?php if($result['City'] == 'Faisalabad') echo "selected"?>>Faisalabad</option>
                <option value="Peshawar" <?php if($result['City'] == 'Peshawar') echo "selected"?>>Peshawar</option>
            </select>
            <br>
            <label for="year">Year :</label>
            <input type="text" name="year" placeholder="Enter your Year here" class="form-control" required value="<?php echo $result['Year']?>">

            <button class="btn btn-success mt-4">Submit</button>
        </form>
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>