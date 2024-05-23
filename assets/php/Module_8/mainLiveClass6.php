<?php


// array_column *****************************


/* $arr1=[

    ['First Name'=>'Jahid','Last Name'=>'Hasan','Email'=>'j.hasan629578@gmail.com','age'=>20],
    ['First Name'=>'OSTAD','Last Name'=>'APP','Email'=>'OSTAD.APP@gmail.com'],
    ['First Name'=>'BO','Last Name'=>'Hasan','Email'=>'BO.App@gmail.com','age'=>19]

];
$fName=array_column($arr1,'First Name');
print_r($fName); */


//  Array_flip *****************************


/*  $arrayFlip=['First Name'=>'Jahid','Last Name'=>'Hasan','Email'=>'j.hasan629578@gmail.com','age'=>20];


 $flipArray=array_flip($arrayFlip);
 print_r($flipArray); */


//  array_replace *****************************

/* $fruites=['apple', 'banana', 'orange', 'grapes', 'pineapple', 'kiwi'];
$newFruites=[0=>'mango',1=>'jackfruit'];
$newArray= array_replace($fruites,$newFruites);
print_r($newArray); */


//  Array_merge *****************************

/* $arr1=[1,2,3];
$arr2=[4,5,6];
$arr3=[7,8,9];

$mergeArray=array_merge($arr1,$arr2,$arr3);
print_r($mergeArray); */


// array_filter *****************************


/* $number=[1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

function even($n){
    return $n % 2 == 0 ;
};

$newNum=array_filter($number,'even');
print_r($newNum);   */

//  Arry_map **************************

$number=[1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

function square($n){
    return $n * $n;
};

$square=array_map('square',$number);
print_r($square);