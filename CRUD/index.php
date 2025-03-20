<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<style>
  #showTable button{
    width: 55%;
    
  }
  #showTable{
    width: 95% !important;
    border: 1px solid black !important;
  }
  #tableHead{
    font-weight: bold;
    font-size: 19px;
  }
  a{
    text-decoration: none;
    color: white;
  }
  a:hover{
    color: white;
  }
</style>
<body>
  <div class="container-fluid">
    <h1 align="center">CRUD</h1>
    <button class="btn btn-success"><a href="./createData.php">Create User</a></button>
    <form action="" method="post">
    
    </form>
  </div>
</body>
</html>
<?php
$stmt = $conn->prepare('SELECT * FROM students');
$stmt->execute();
$result = $stmt->fetchAll();

echo "<table border='1' class='table table-success table-striped mt-4' style='margin: 15px'; id='showTable'>
      <tr id='tableHead'>
        <td>S.NO</td>
        <td>Name</td>
        <td>Course</td>
        <td>Batch</td>
        <td>City</td>
        <td>Year</td>
        <td>Update</td>
        <td>Delete</td>
      </tr>";
      $count =1;
      foreach ($result as $student) {
    echo "<tr>
         <td>$count</td>
         <td>{$student['Name']}</td>
         <td>{$student['Course']}</td>
         <td>{$student['Batch']}</td>
         <td>{$student['City']}</td>
         <td>{$student['Year']}</td>
         <td> <button class='btn btn-primary'>Edit </button> </td>
         <td> <button class='btn btn-danger'>Delete</button> </td>
         ";
         $count++;
      }


?>
