<?php
class Person
{
    public $name;
    public $age;

    public function getName()
    {
        return $this->name;
    }
    public function getAge()
    {
        return $this->age;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
    public function setAge($age)
    {
        if ($age <= 0) {
            throw new Exception("Age must be greater than 0");
        }
        $this->age = $age;
    }

    function introduce()
    {
        echo "Hi I am {$this->name} and I am {$this->age} years old \n ";
    }
    /* function __toString()
    {
        return "Name : {$this->name}\n Age  : {$this->age} years old \n ";
    } */
    function __toString(){
        return json_encode(["name"=> $this->name,"Age"=> $this->age]);
    }
   
}
$person = new person();
$person->setName("Jahid");
$person->setAge(2);
$person->introduce();
// echo serialize($person);
echo $person;
