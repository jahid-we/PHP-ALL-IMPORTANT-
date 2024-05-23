<?php
// inheritance  Parent Keyword*****************************

class Father{

    public function print100(){
        for ($i = 1; $i <= 50; $i++) {
            echo $i . "\n";
        }
    }
}

class Son extends Father{

    public function demo(){

        parent::print100()
;
    }
}


$sonobj=new Son();
$sonobj->demo();