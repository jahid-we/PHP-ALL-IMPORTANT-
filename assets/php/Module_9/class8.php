<?php
// Constant access

// define("Bangladesh","Dhaka");
/* const Bangladesh="Dhaka";
echo Bangladesh; */
class Myclass{
    const Bangladesh="Dhaka";
    function selfCity(){
        echo "Hi From ".self::Bangladesh.".\n"; 
    }
}

$obj=new Myclass();
$obj->selfCity();
echo $obj::Bangladesh;