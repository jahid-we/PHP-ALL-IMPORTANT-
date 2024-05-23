<?php

class Car
{


    // constructor function

    public function __construct($num1, $num2, $num3)
    {
        echo $num1 + $num2 + $num3;
    }

    public $color = "Red";
    public function drive()
    {
        echo "I am Driving \n";
    }
    public function washing()
    {
        echo "I am washing \n";
    }
}
// object
$bmw = new Car(1, 2, 3);
