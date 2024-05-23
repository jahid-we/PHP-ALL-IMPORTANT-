<?php
class DistrictCollection implements IteratorAggregate, Countable
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
    function count(): int
    {
        return count($this->districts);
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
echo count($districts);
