<?php
// CLONE Built-in Function  ************************************
class Color{
    function __construct(public $color){}

    function setColor($color){
        $this->color = $color;
    }

}
class favColor{
    function __construct(public $data , public $color){
        $this->color = new Color($color);
    }

    function updateColor($color){
        $this->color->setColor($color);
    }

    function __clone(){
        $this->color = clone $this->color;
    }
}
$obj1=new favColor("Somedata","blue");
print_r($obj1);
$obj2=clone $obj1;
print_r($obj2);
$obj2->updateColor("red");
print_r($obj1);
print_r($obj2);




/* class Somedata
{
    function __construct(public $data)
    {
    }
    function setdata($data)
    {
        $this->data = $data;
    }
}
$moreData = new Somedata("More Data");
$somedata = clone $moreData;
print_r($moreData);
print_r($somedata);

$somedata->setdata("Somedata");

print_r($moreData);
print_r($somedata); */
