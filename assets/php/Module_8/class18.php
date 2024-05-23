<?php
$number = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];

/* function sum($oldValue = 0, $newValue)
{

    return $oldValue + $newValue;
}
$sum = array_reduce($number, "sum");
echo $sum; */

/* $newSum=array_sum($number);
echo $newSum; */

function even($n){
    return $n % 2 == 0;
}

$evenNumbers=array_filter($number,"even");

$newSum=array_sum($evenNumbers);
echo $newSum;
