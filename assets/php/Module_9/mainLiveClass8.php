<?php
// constructor for inheritance *****************************

class Father{

    public function __construct(){

        echo "I am Father constructor. \n";

    }
    
        
    }
   


class Son extends Father{


    public function __construct(){

        echo "I am son constructor. \n";

    }

}


$sonobj=new Son();
