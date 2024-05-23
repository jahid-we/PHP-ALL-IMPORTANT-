<?php
class DistrictCollection implements IteratorAggregate
{

    private $districts;
    function __construct()
    {
        $this->districts = [];
    }


    function add($district)
    {
        array_push($this->districts, $district);
    }

    /* function getDistricts(){
        return $this->districts;
    } */
    function getIterator(): Traversable
    {
        return new ArrayIterator($this->districts);
    }
}
$districts = new DistrictCollection();
$districts->add("Dhaka");
$districts->add("Rajshahi");
$districts->add("Khulna");
$districts->add("Sylhet");

foreach ($districts as $district) {
    echo $district . "\n";
}
