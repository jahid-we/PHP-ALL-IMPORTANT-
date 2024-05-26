<?php
class Student
{
    public $name;
    public $age;
    function __construct($name, $age)
    {

        $this->name = $name;
        if ($age < 4) {
            throw new Exception("Invalid Age",1001);
        }elseif($age>31){
            throw new Exception("too Old",1002);
        }
        $this->age = $age;
    }
}

try {
    $obj = new Student('Jahid Hasan',32);
    echo "Hi {$obj->name}";
} catch (Exception $e) {
    echo $e->getcode().":".$e->getmessage();
}
