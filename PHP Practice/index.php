<?php 

//Making functions

// Nested Functions
function hello(){
    echo "Hello world <br>";

    function apple(){
        echo "Apple is a fruit ";
    }
    apple();
}

hello();