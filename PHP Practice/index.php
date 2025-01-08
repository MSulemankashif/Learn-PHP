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
    <?php
        //Php Object
        class Animal{
            public $name; //Property
            public $eating; //Property

            function setName($name){
                $this->name = $name;
            }
            function getName(){
                return $this->name;
            }
            function setEating($eating){
                $this->eating = $eating;
            }
            function getEating(){
                return $this->eating;
            }
        };
        $Tiger = new Animal();

        $Tiger->setName("Tiger ");
        $Tiger->setEating("Meat");

        echo $Tiger->getName()."<br>";
        echo $Tiger->getEating()."<br>";
    ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>