<?php
/* $name = "Jahid Hasan";
$length = strlen($name);
echo $length; */

//  Built-in Functions **************************************
// 2 Types Function

/* function sum(){
    $num1=200;
    $num2=50;
    $num3= $num1+$num2;
    echo $num3;

} 
sum(); */


// parameterized Function ***********************

/* function number($x,$y){
    $num1=$x;
    $num2=$y;
    echo $num1+$num2."\n";
}
number(20,58);
number(20,528);
number(20,258);
number(208,58);
number(250,58); */

// Default value ********************************

/* function number($x,$y,$c=0){
    $num1=$x;
    $num2=$y;
    $num3=$c;
    echo $num1+$num2-$num3."\n";
}
number(20,58);
number(20,528,55); */

// Params Type / Type hinting***********************

/* function number(int $x,float $y, int $c=0){
    $num1=$x;
    $num2=$y;
    $num3=$c;
    echo $num1+$num2-$num3."\n";
}
number(20,58);
number(255,225,25); */

// multiple type hinting ***********************************

/* function mySelf(string $name, string|int $age,string $city){
echo "My name is {$name} , I am {$age} years old, I live in {$city}";

}
mySelf("Jahid Hasan",21,""); */

// Nullable Type **************************************

/* function mySelf(?string $name, string|int $age){
    echo "My name is {$name}, I am {$age} years old";
    
    }

mySelf("Jahid Hasan",21);
echo PHP_EOL;
mySelf("",21); */

// Strict mode ************************************
/* 
declare(strict_types=1);

function mySelf(?string $name, string|int $age){
    echo "My name is {$name}, I am {$age} years old";
    
    }

mySelf("",21);
echo PHP_EOL;
mySelf("",21); */

// Variadic Function ********************************* --> Spread operator

/* function sum(...$number){

for($i=0;$i<count($number);$i++){

    echo $number[$i]."\n";
}

};

sum(12,52,47,11,15,320,21,65,24); */

// Anonymous Function ****************** --> hit & run || IIF

/* (function(){
    echo "I am an Anonymous Function";
})(); */

// Assigned to Variable

/* $fun = (function(){
    echo "I am an Anonymous Function";
})();


echo $fun; */

// Basic Return Type int,void,string,bool,float 

/* function addTwo():string{
$a=10;
$b=20;
return $a+$b;

}
$sum=addTwo() +10;
echo $sum; */

// Multiple/Union Return Type int,void,string,bool,float 

/* function addTwo():string|bool|float {
    $a=10;
    $b=20;
    return $a+$b;
    
    }
    $sum=addTwo() +10;
    echo $sum; */