<?php 
include 'config.php';

$id = $_POST['id'];
$name = $_POST['name'];
$course = $_POST['course'];
$batch = $_POST['batch'];
$city = $_POST['city'];
$year = $_POST['year'];

$query = 'SELECT * FROM students WHERE id ='. $id;
$stmt = $conn->prepare($query);
$stmt->execute();
$result = $stmt->fetch();

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
    <h1>Edit</h1>
    <form action="./editData.php" method="post">
        <input type="hidden" id="id" name="id" value="<?php echo $result['id']; ?>">
        <br>
        <label for="name">Name :</label>
        <input type="text" name="name" value="<?php echo $result['name']; ?>" required>
        <br>
        <label for="course">Course :</label>
        <div class="form-check">
                <input class="form-check-input" type="radio" value="ADSE" id="flexCheckDefault" name="course" <?php if($result['course']== 'ADSE') echo'checked' ?>>
                <label class="form-check-label" for="flexCheckDefault">
                    ADSE
                </label>
             </div>
            <div class="form-check">
                  <input class="form-check-input" type="radio" value="HDSE" id="flexCheckChecked" name="course" <?php if($result['course']== 'HDSE') echo'checked' ?>>
                  <label class="form-check-label" for="flexCheckChecked">
                    HDSE
                  </label>
            </div>
        <br>
        <label for="batch">Batch :</label>
        <input type="text" name="batch" value="<?php echo $result['batch']; ?>" required>
        <br>
        <label for="city">Year :</label>

        <br>
        <label for="year">Batch :</label>
        <input type="text" name="year" value="<?php echo $result['batch']; ?>" required>
        <br>
    </form>
</head>
<body>

</body>
</html>