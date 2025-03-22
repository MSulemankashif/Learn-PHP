<?php 
include_once 'config.php';

$id = $_GET['id'];
// $name = $_GET['name'];
// $course = $_GET['course'];
// $batch = $_GET['batch'];
// $city = $_GET['city'];
// $year = $_GET['year'];

$query = 'SELECT * FROM students WHERE id ='. $id;
$stmt = $conn->prepare($query);
$stmt->execute();
$result = $stmt->fetch();

// if($result){
//     // echo "Record Found";
//     print_r($result);
// }else{
//     echo "Record Not Found";
// }
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
  <link rel="stylesheet" href="style.css">
  <div class="container">
  <h1>Edit Record</h1>
    <form action="./editData.php" method="post">
        <input type="hidden" id="id" name="id" value="<?php echo $result['id']; ?>" >
        <br>
        <label for="name">Name :</label>
        <input type="text" name="name" value="<?php echo $result['Name']; ?>" required class="form-control">
        <br>
        <label for="course">Course :</label>
        <div class="form-check">
                <input class="form-check-input" type="radio" value="ADSE" id="flexCheckDefault" name="course" <?php if($result['Course']== 'ADSE') echo'checked' ?>>
                <label class="form-check-label" for="flexCheckDefault">
                    ADSE
                </label>
             </div>
            <div class="form-check">
                  <input class="form-check-input" type="radio" value="HDSE" id="flexCheckChecked" name="course" <?php if($result['Course']== 'HDSE') echo'checked' ?>>
                  <label class="form-check-label" for="flexCheckChecked">
                    HDSE
                  </label>
            </div>
        <br>
        <label for="batch">Batch :</label>
        <input type="text" name="batch" value="<?php echo $result['Batch']; ?>" required class="form-control">
        <br>
        <label for="city">City :</label>
        <select name="City" class="form-select">
                <option>Select Your City</option>
                <option value="Karachi" <?php if($result['City']== 'Karachi') echo "selected"?>>Karachi</option>
                <option value="Lahore" <?php if($result['City']== 'Lahore') echo "selected"?>>Lahore</option>
                <option value="Islamabad" <?php if($result['City']== 'Islamabad') echo "selected"?>>Islamabad</option>
                <option value="Multan" <?php if($result['City']== 'Multan') echo "selected"?>>Multan</option>
                <option value="Faisalabad" <?php if($result['City']== 'Faisalabad') echo "selected"?>>Faisalabad</option>
                <option value="Hyderabad" <?php if($result['City']== 'Hyderabad') echo "selected"?>>Hyderabad</option>
                <option value="Peshawar" <?php if($result['City']== 'Peshawar') echo "selected"?>>Peshawar</option>
             </select>
        <br>
        <label for="year">Year :</label>
        <input type="text" name="year" value="<?php echo $result['Year']; ?>" required class="form-control">
        <br>
        <button class="btn btn-primary">Update</button>
    </form>
    </div>
</head>
<body>

</body>
</html>