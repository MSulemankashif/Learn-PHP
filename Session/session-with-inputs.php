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
<form action="" method="post">
        <input type="text" name="name" placeholder="Enter your name" class="mt-3">
        <br>

        <button value="set" name="button" class="mt-3 btn btn-success">Set Session</button>
        <br>
        <button value="get" name="button" class="mt-3 btn btn-primary">Get Session</button>
        <br>
        <button value="delete" name="button" class="mt-3 btn btn-danger">Delete Session</button>
        <br>
    </form>    
</body>
</html>
<?php
    // session_start();
    // if(isset($_POST['button'])){
    //     if($_POST['button'] == 'set'){
    //         $val = $_POST["name"];
    //         $_SESSION['name'] = $val;
    //         // echo $_SESSION['name'];
    //     }else if($_POST['button'] == 'get'){
    //         echo $_SESSION['name'];

    //     }else if($_POST['button'] == 'delete'){
    //         session_destroy();
    //     };
    // };

    session_start();
    if(isset($_POST['button'])){
        if($_POST['button'] == "set"){
            $val = $_POST['name'];
            $_SESSION['name'] = $val;
        }else if($_POST['button'] == 'get'){
            echo $_SESSION["name"];
        }else if ($_POST["button"] == "delete"){
            session_destroy();
        };
    };
