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
    

    //Second 
    class Animal {
        public $name; //Property
        public $eating; //Property

        public function __construct($name, $eating){
            $this->name = $name;
            $this->eating = $eating;
        }

        public function result(){
            return "The name of the animal is $this->name and it eats $this->eating";
        }
    }
    $Tiger = new Animal("Tiger", "Meat");
    $goat = new Animal( "Goat", "Grass");
    
        print_r($Tiger);
        echo "<br>";
        print_r($goat);

        //Switch case statement
// $favoriteColor = "blur";

// switch($favoriteColor){
//     case "blue":
//         echo "Your favorite color is blue";
//         break;
//     case "red":
//         echo "Your favorite color is red";
//         break;
//     case "orange":
//         echo "Your favorite color is orange";
//         break;
//     default:
//         echo "You like all colors";
//         break;
// };

$y =20;
echo 'Before Execution ';
if($y == 20){
    goto end;
}
echo "Hello world";

end: echo"<br> after execution";

function printName($name,$color){
    echo "<h1 style='color:$color'>Your name is $name</h1>";
};

printName("Suleman","green");

function sayHello(){
    echo "Calling frist function <br>";

    function nested(){
        echo "This is second function";
    };
};

sayHello();
nested();




// Variable Functions
function test(){
    echo "This is a test function";
};

$testFunc = "test"; 
$testFunc();

//Arrays

$users = array("Suleman","Usman","Ali","Ahmed","Kamran","Noman","Talha","Bilal","Zain","Ahsan");
// $other=["Suleman","Usman","Ali","Ahmed","Kamran","Noman","Talha","Bilal","Zain","Ahsan"];

for($i=0; $i<count($users);$i++){
    echo $users[$i]."<br>";
};



$users = array("Suleman","Usman","Ali","Ahmed","Kamran","Noman","Talha","Bilal","Zain","Ahsan");

foreach($users as $user){
    
    if($user == "Ahmed"){
        // break;
        continue;
    }
    echo $user ."<br>";
}

//Associative Array

$students = array(
    "name"=>"Suleman",
     "age"=>19,
     "email"=>"suleman@gmail.com",
     "city"=>"Karachi"
    );

// foreach($students as $key => $value){
//     echo "<br> The $key is $value";
// }

foreach($students as $key => $value):
    echo "The Key is $key and the value is $value . <br>";
endforeach;




//Multidimentional Arrays
$users =[
    [1,"Suleman","karachi"],
    [2,"Usman","Lahore"],
    [3,"Ali","Islamabad"],
    [4,"Ahmed","Quetta"],
    [5,"Kamran","Peshawar"],
    [6,"Noman","Multan"],
    [7,"Talha","Faisalabad"],
    [8,"Bilal","Sialkot"],
    [9,"Zain","Gujranwala"],
    [10,"Ahsan","Rawalpindi"]
];
// echo "<pre>";
// print_r($users);

for($i=0; $i<count($users);$i++){
    // print_r($users[$i]);
    // echo "<br>";
    for($j=0; $j<count($users[$i]);$j++){
        echo $users[$i] [$j]. "<br>";
    };
};


$users = [
    [1,"Suleman","Karachi"],
    [2,"Usman","Lahore"],
    [3,"Ali",'Islamabad']    
];

for($i=0; $i<count($users);$i++){
    for($j=0; $j<count($users[$i]);$j++){
        echo $users[$i][$j]. " <br>";
    };
};