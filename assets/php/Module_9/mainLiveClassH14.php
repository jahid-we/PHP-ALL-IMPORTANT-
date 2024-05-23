<?php
interface Vehicale{
    function start();
    function stop();
    function getMilage($distanc,$fuel);
}
abstract class VehicaleX implements Vehicale{
    function getMilage($distanc,$fuel){
        $vahecle=get_class($this);
        echo "{$vahecle} is ".$distanc/$fuel." Kmpl \n";
    }
}

class Car extends VehicaleX{
    public function start(){
        echo "Car started \n";
    }
    public function stop(){
        echo "Car stopped \n";
    }
}

class Motocycle extends VehicaleX{
    public function start(){
        echo "Motocycle started \n";
    }
    public function stop(){
        echo "Motocycle stopped \n";
    }
   
}
class Truck extends VehicaleX{
    public function start(){
        echo "Truck started \n";
    }
    public function stop(){
        echo "Truck stopped \n";
    }
    function getMilage($distanc,$fuel){
        echo "Truck Milage is ".$distanc/$fuel." MPL \n";
    }
    
}
$m=new Motocycle();
$c=new Car();
$t=new Truck(); 

$m->start();
$m->stop();
$m->getMilage(100,10);

$c->start();
$c->stop();
$c->getMilage(100,10);

$t->start();
$t->stop();
$t->getMilage(100,10);
