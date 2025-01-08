<?
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

    //OOP in PHP
    class Car {
        public $color; //Property
        public $model;  //Property
        public function __construct($color,$model){ //Construct is a special function. It is automaticaly executed when an object of the class is created
            $this->color = $color;
            $this->model = $model;
        }
        public function message(){
            return "My car is a " . $this->color . "" .$this->model . "!"; 
        }
    }
    $myCar = new Car("black","Volvo");
    print_r($myCar);
    ?>