<?php
// Static keyword  *****************************

class MyGadget{

    public static function Chata(){
        echo "I am Chata\n";
    }

    public function Handwatch(){
        echo "I am Handwatch";
    }
    static public function DSLR(){
        echo "I am DSLR";
    }
    public function Mobile(){
        echo "I am Mobile";
    }
}
MyGadget::Chata();
MyGadget::DSLR();