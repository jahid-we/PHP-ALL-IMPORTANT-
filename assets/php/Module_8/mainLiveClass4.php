<?php

//  array , array_values , array_keys *************************************



$form=['fName'=>'Jahid','lName'=>'Hasan','email'=>'j.hasan629578@gmail.com','age'=>20];




// $arr=array_values($form);





/* $arr=array_keys($form);
print_r($arr);
 */





// array_combine *****************************






/* $keys=['a','b','c'];
$values=['apple','banana','cat'];
$combined=array_combine($keys,$values);
print_r($combined);  */






// array_fill *****************************



/* $filled=array_fill(0,20,'OSTAD');
print_r($filled); */




// array_push and array_unshift , array_pop and array_shift *****************************


/* $country=['BD','USA','UK','UAE'];

// array_pop($country);
// array_shift($country);


// array_push($country,'PAK','INDIA');
array_unshift($country,'PAK','INDIA');

print_r($country); */





// array_slice and splice ********************************



/* $fruites=['apple', 'banana', 'orange', 'grapes', 'pineapple', 'kiwi'];

$someFruites=array_slice($fruites,0,3);
print_r($someFruites); */

$fruites=['apple', 'banana', 'orange', 'grapes', 'pineapple', 'kiwi'];
$someFruites=array_splice($fruites,0,3,['mango','papaya','guava']);
print_r($someFruites);
print_r($fruites);