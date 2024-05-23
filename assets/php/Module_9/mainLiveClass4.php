<?php

class Car{


    // constructor function

    public function __construct($newColor){
       $this->color=$newColor;
    }

    public $color = "Red";

    public function drive()
    {
        echo "I am Driving {$this->color} car. \n";
    }
    public function washing()
    {
        echo "I am washing \n";
    }
}

// object
$bmw = new Car("Green");
$bmw->drive();
echo $bmw->color;
