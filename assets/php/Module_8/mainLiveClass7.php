<?php
// array_compact *****************************
$name="Jahid";
$age=20;
$address="Brahmanbaria";

$details=compact('name','age','address');
print_r($details);

echo "\n";
echo "\n";

//  array extract *****************************

$person=['firstName'=>'Jahid','lastName'=>'Hasan','email'=>'j.hasan629578@gmail.com','age'=>20];

extract($person);

echo $firstName;