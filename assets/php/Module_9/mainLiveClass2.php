<?php
class Car{


    // constructor function

    public function __construct(){
        echo "A new Car has been created \n";
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

$bmw = new Car();

