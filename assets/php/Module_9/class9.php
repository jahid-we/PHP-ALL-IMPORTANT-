<?php
class Student
{
    private $name;
    private $age;
    private $class;

    function __construct($name, $age, $class)
    {

        $this->name = $name;
        $this->age = $age;
        $this->class = $class;
    }
    public function __get($prop){

        return ucwords($this->$prop);
    }
    public function __set($prop, $value){

        $this->$prop=ucwords($value);
    }

    function printer(){
        printf("Name   : {$this->name} \nAge    : {$this->age} \nClass  : {$this->class} \n");
    }

    // function getName(){
    //     return $this->name;
    // }
    // function setName($name){
    //     $this->name=$name;
    // }


    // function getAge(){
    //     return $this->age;
    // }
    // function setAge($age){
    //     $this->age=$age;
    // }


    // function getClass(){
    //     return $this->class;
    // }
    // function setClass($class){
    //     $this->class=$class;
    // }
}
$obj=new Student("Jahid",20,"Eleven");
$obj->printer();

echo $obj->name;