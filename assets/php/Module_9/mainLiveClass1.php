<?php
// What is oop

// class

class Car
{

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
// echo $bmw->color;
$bmw->drive();
$bmw->drive();
$bmw->drive();
$bmw->drive();
$bmw->washing();
$bmw->washing();
$bmw->washing();
$bmw->washing();
