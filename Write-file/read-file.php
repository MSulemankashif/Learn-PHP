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
<style>
    *{
        margin: 20px;
    }
</style>
<body>
    <div class="container-fluid">
        <form action="" method="post">
            <input type="text" name="file" placeholder="Enter a file name here" class="form-control">
            <br>
            <button class="btn btn-success">Submit</button>
        </form>

</div>
</body>
</html>


<?php
// $file = 'files/index.txt';
// $myFile = fopen($file, "r" ) or die ("Unable to read file");
// echo fread($myFile, filesize($file));
// fclose($myFile);

if(isset($_POST['file'])){
    $file = 'files/'. $_POST['file'] . '.txt';
    $myFile = fopen($file, "r" ) or die ("Unable to read file");
    echo fread($myFile, filesize($file));
    fclose($myFile);
}

?>