<?php
//  Abstraction *****************************

abstract class Father{

    public function print100(){
        for ($i = 1; $i <= 100; $i++) {
            echo $i . "\n";
        }
    }
}

class Son extends Father{

    public function demo(){

        parent::print100();
    }
}


/* $objFather=new Father();
$objFather->print100(); */

$objSon=new Son();
$objSon->demo();