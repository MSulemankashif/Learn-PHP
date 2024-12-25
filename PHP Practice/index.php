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
<title>Learning PHP</title>
</head>
<body>
    <h1>Hello World from PHP</h1>
    <?php
        echo "Hello World from PHP";

        $number1 = 10;
        $number2 = 21;
            echo "<br>";
        // echo $number1 + $number2;
         echo ++$number1;

        $val= $number1 && $number2 > 8;
    echo $val
    ?>


    <br>
    <button class="btn btn-success">Click me</button>

    <script>
        let body =document.querySelector('body');
        let btn =document.querySelector('button');
        btn.addEventListener('click', function(){
            body.style.backgroundColor = 'black';
            body.style.color = 'white';
        });
    </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>