<?php
declare(strict_types=1);
class Shape{

}
class Shapes{
    private $shapes;
    function __construct(){
        $this->shapes=[];
    }
    function addShape(Shape $shapes){
        array_push($this->shapes,$shapes);
    }
    function totalShapes(){

        return count($this->shapes);
    
    }

}

class Rectanule extends Shape{

}
class Triangle extends Shape{

}
class Student{

}
$shapesCollection=new Shapes();
$shapesCollection->addShape(new Rectanule());
$shapesCollection->addShape(new Triangle());
// $shapesCollection->addShape(new Student());
echo $shapesCollection->totalShapes();