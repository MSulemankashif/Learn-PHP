<?php

class car {
    public $car_name;

    public $car_model;

    function setvalues($name,$model)
    {
        $this->car_name = $name;
        $this->car_model = $model;
    }

function getData()
{
    echo "Name is ". $this->car_name. " and Model is  ". $this->car_model;
}
}

// $car1 = new car();
// $car1->setvalues('Toyota','Yaris');
// $car1->getData();

class car2 extends car 
{
    
}