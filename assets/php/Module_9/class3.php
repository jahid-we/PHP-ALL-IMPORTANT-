<?php
declare(strict_types=1);  
class Human{
    public $name;
    public $age;

    public function __construct(string $name, string|int $age=20){
        $this->name=$name;
        $this->age=$age;
       
    }

    function greeting(){
        printf("Hello %s,Good Morning.I am %d Years Old. \n",$this->name,$this->age);
    }
}
$obj1=new Human("Jahid",20);
$obj2=new Human("Hasan",21);

$obj1->greeting();
$obj2->greeting();