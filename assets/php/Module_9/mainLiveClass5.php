<?php
// inheritance *****************************

class Father{

    public function print100(){
        for ($i = 1; $i <= 100; $i++) {
            echo $i . "\n";
        }
    }
}

class Son extends Father{
    
/* 
    public function print100(){
        for ($i = 1; $i <= 100; $i+=10) {
            echo $i . "\n";
        }
    } */

}


$sonobj=new Son();
$sonobj->print100();