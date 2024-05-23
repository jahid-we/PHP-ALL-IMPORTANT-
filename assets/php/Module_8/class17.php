<?php
$number=[1, 2, 3, 4, 5, 6, 7, 8, 9, 10,11,12];

function square($n){
    printf("Square of %d is %d \n", $n, $n*$n);
}
function cube($n){
    return $n*$n*$n;
}
function squa($n){
    return $n*$n;
}
array_walk($number, "square");
array_walk($number, "cube");

$newArray1=array_map("squa",$number);
print_r($number);
print_r($newArray1);

function even($n){
    return $n % 2==0;
};
function odd($n){
    return $n % 2!=0;
}

$newArray2=array_filter($number,"even");
print_r($newArray2);

$newArray3=array_filter($number,"odd");
print_r($newArray3);

$persons=['abir','kabir','jahid','saima','bonna','kamrul'];
function startWithK($person){
    return $person[0]=='k';
}
$newarr=array_filter($persons,"startWithK");
print_r($newarr);