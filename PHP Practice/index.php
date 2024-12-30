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

        // $number1 = 10;
        // $number2 = 21;
        //     echo "<br>";
        // echo $number1 + $number2;
        // echo ++$number1;
        // echo "<br>";

        // $age = 60;
        // echo "<br>";
        // if($age >= 60){
        //     echo "You are not eligible to Vote";
        // }else if($age >= 18){
        //     echo "You are eligible to Vote";
        // }else{
        //     echo "You are not eligible to Vote";
        // }

        $languages = array("Python", "Php", "Java", "C++", "C#","Javascript","Ruby");
        // echo "<br>";
        // echo count($languages);

        $name = "Suleman";
        // $age = 19;
        $PI = 3.14;

        // echo "<br>";
        // echo "$name is  $age years old and the value of pi is $PI";
        
        // do{
            //     echo "<br> The value is $val";
            //     $val++;
            // }while($val <= 10);
            
    //     $val =0;

    //  while($val < count($languages)){
    //     echo "<br> The value is $languages[$val]";
    //     $val++;
    //  }
    echo "<br>";

    print_r($languages);

    foreach($languages as $value){
        echo "<br> The value is $value";
    }
    // String Functions in PHP
    echo "<br>";
    echo var_dump($name);
    echo "<br>";
    echo strpos($name, 'm');
    echo "<br>";
    echo gettype($PI);
    echo "<br>";
    echo strlen($PI);
    echo "<br>";
    echo gettype($PI);
    echo "<br>";

    $str = "This is a String";

    $lenn = strlen($str);
    echo "The length of the string is $lenn <br>";
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