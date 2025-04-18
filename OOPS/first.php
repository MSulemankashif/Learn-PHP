<?php

// class MathOperations {
    
//     public $val = 10;

//     // Method Declaration
//     function sum($a,$b){
//         echo $a+$b+$this->val;
//     }

//     function multi($a,$b){
//         echo $a*$b;
//     }
// }

// $sum = new MathOperations();
//     $sum->sum(20,20);
//     echo "<br>";
// $multiply = new MathOperations();
//     $multiply->multi(20,7);

class operation {

    function multiply(){
        echo "Hello world from OOP";
    }
}

$mul = new operation();
echo $mul->multiply();