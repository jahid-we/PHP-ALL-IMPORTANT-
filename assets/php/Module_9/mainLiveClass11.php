<?php
// Self keyword / $this->variable *****************************

class MyGadget{

    public static $myDslrCameraName="Canon";

    public $myMobileName="Samsung";

    public static function Chata(){
        echo "I am Chata";
    }

    public function Handwatch(){
        echo "I am Handwatch";
    }
    public function DSLR(){
        echo self::$myDslrCameraName. "\n";
    }
    public function Mobile(){
        echo $this->myMobileName;
    }
}
$myobj= new MyGadget();
$myobj->DSLR();
$myobj->Mobile();