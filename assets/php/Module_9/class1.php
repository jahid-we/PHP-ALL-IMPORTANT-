<?php

class Human{
    function sayHi(){
        echo "Salam \n";
    }
}
$greet=new Human();
$greet->sayHi();

class Cat{

    function meoo(){
        echo "Meo \n";
    }
}

$meo=new Cat();
$meo->meoo();