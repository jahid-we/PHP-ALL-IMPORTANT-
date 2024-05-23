<?php

//  Count and sizeof *************************************

/* $item=['apple', 'banana', 'orange', 'grapes', 'pineapple', 'kiwi'];
// echo count($item);
// echo sizeof($item); */



//  array_sum and array_product *************************************



/* $array11=[1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// $sumarray=array_sum($array11);

$sumarray=array_product($array11);

echo $sumarray; */

// in_array *************************************





/* $items=[1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$check=in_array(3,$items);
echo $check; */

// is_array *************************************




/* $items=[1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$check=is_array($items);
echo $check; */




// array_key_exists *************************************




/* $items=['a'=>12, 'b'=>13, 'c'=>14, 'd'=>15, 'e'=>16, 'f'=>17];

$check=array_key_exists('b',$items);
echo $check; */




// array_search *************************************



$form=['First Name'=>'Jahid','lName'=>'Hasan','email'=>'j.hasan629578@gmail.com','age'=>20];
$check=array_search('Jahid',$form,true);
echo $check;