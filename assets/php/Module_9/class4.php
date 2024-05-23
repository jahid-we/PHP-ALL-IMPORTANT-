<?php
declare(strict_types=1);
class Fund{
    private $fund;
    public function __construct(int $initialFund=0){
        $this->fund=$initialFund;
    }
    public function addFund(int $money){

        $this->fund+=$money;

    }
    public function deductFund(int $money){
        $this->fund-=$money;
    }
    public function getTotal(){
        echo "Total Fund is {$this->fund}.";
    }
}
$fundobj= new  Fund(1000);
$fundobj->addFund(5000);
$fundobj->deductFund(200);
$fundobj->getTotal();