<?php
$name = "Jahid Hasan Bro";

// variable scope****************************************

function myFun()
{
    global $name;
    echo $name;
    
}
myFun();

echo "\n";

function myFun2()
{
    $name = "Jahid Hasan";

    echo $name;
}
myFun2();

// PHP CONSTANT
echo "\n";

define('Jahid',"Hasan");
define('Hasan',"Bro");

echo Jahid;
echo Hasan;
