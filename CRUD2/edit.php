<?php
include 'config.php';

$id = $_GET['id'];

$query = 'SELECT * FROM students where id = ' . $id;
$stmt = $conn->prepare($query);
$stmt->execute();
$result = $stmt->fetchAll();

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
</head>
<body>
<h1>Edit Data</h1>
    <header>
        <nav class="nav">
            <ul>
                <li>Home</li>
                <li>About</li>
                <li>Contact</li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <form action="editData.php" method="post" class="form-control">
            <input type="hidden" name="id" value="{$result['id}">
            <label for="name">Name:</label>
            <input type="text" placeholder="Enter Your Name" name="name" class="form-control" required value="{$result['name']}">
            <label for="course">Course:</label>
            <select class="form-select" area-label="Default select">
                <option value="">Select Course</option>
                <option value="React JS" <?php $result['course'] == "React JS" ? 'selected' : '' ?>>React JS</option>
                <option value="Angular">Angular</option>
                <option value="Vue JS">Vue JS</option>
                <option value="Laravel">Laravel</option>
                <option value="Javascript">Javascript</option>
                <option value="Agentic AI">Agentic AI</option>
                <option value="Python">Python</option>
                <option value="Java">Java</option>
            </select>
            <input type="text">
            <input type="text">
            <input type="text">
        </form>
    </div>

</body>
</html>