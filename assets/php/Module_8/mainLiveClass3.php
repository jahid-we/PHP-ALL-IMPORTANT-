<?php
//  Multidimensional Array ***********************

/* $array1=[1,2,3];
$array2=[4,5,6];
$array3=[7,8,9]; */

/* $arr=[
    ['a','b','c'],
    ['d','e','f'],
    ['g','h','i']
];

print_r($arr);

echo $arr[2][2]; */

$arr1=[

    ['First Name'=>'Jahid','Last Name'=>'Hasan','email'=>'j.hasan629578@gmail.com','age'=>20],
    ['Name'=>'OSTAD','Last Name'=>'APP','email'=>'OSTAD.APP@gmail.com'],
    ['First Name'=>'BO','Last Name'=>'Hasan','email'=>'BO.App@gmail.com','age'=>19]

];

// echo $arr1[2]['First Name']." ".$arr1[2]['Last Name'];


foreach($arr1 as $child){

foreach($child as $key => $value){

    echo strtoupper($key)." : ".$value."\n \n";
};

};