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
<title>Search</title>
<style>
    form{
        display: flex !important;
        justify-content: center !important;
    }
    button{
        height: 40px !important;
        width: 100px !important;
        margin-top: 20px;
    }
</style>
</head>
<body>
    <div class="container">
        <form action="search.php" method="post" class="form-inline">
            <input type="text" name="search" placeholder="Search here..." class="form-control m-4">
            <button class="btn btn-primary">Search</button>
        </form>
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>

<?php
    if(isset($_POST['search'])){
        $search = $_POST['search'];
        $stmt = $conn->prepare("SELECT * FROM students WHERE name = '$search'");
        $stmt->execute();
        $result = $stmt->fetchAll();

        // print_r($result);
        if($result){
            // print_r($result);
            echo "<div class='container-fluid'>";
            echo '<table border="1" class="table table-striped">
            <tr>
                <th>S.No</th>
                <th>Name</th>
                <th>Course</th>
                <th>Batch</th>
                <th>City</th>
                <th>Year</th>
            </tr>';
            $count = 1;
            foreach($result as $record){
            echo "<tr>
                <td>$count</td>
                <td>{$record['Name']}</td>
                <td>{$record['Course']}</td>
                <td>{$record['Batch']}</td>
                <td>{$record['City']}</td>
                <td>{$record['Year']}</td>
            </tr>";
            echo "</div>";
                $count++;
            }

        }else{
            echo "No data found";
        }
    }else{
        echo "No data found";
    }
?>