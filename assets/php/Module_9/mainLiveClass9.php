<?php
// final keyword  *****************************

class Father{

    public function murgi(){
        for ($i = 1; $i <= 100; $i++) {
            echo $i . "\n";
        }
    }
   final public function jomi(){
        for ($i = 1; $i <= 100; $i++) {
            echo $i . "\n";
        }
    }
    public function mobile(){
        for ($i = 1; $i <= 100; $i++) {
            echo $i . "\n";
        }
    }
    
        
    }
   


class Son extends Father{

    public function murgi(){
        for ($i = 1; $i <= 100; $i++) {
            echo $i . "\n";
        }
    }
    // public function jomi(){
    //     for ($i = 1; $i <= 100; $i++) {
    //         echo $i . "\n";
    //     }
    // }
    public function mobile(){
        for ($i = 1; $i <= 100; $i++) {
            echo $i . "\n";
        }
    }

    
}


$sonobj=new Son();
