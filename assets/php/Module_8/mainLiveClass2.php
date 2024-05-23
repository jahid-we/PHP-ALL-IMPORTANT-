<?php
// Associative Array *********************

$form=['fName'=>'Jahid','lName'=>'Hasan','email'=>'j.hasan629578@gmail.com','age'=>20];

print_r($form)."\n";



// For Loop Through an Associative Array *************************

foreach($form as $fkey => $fvalue){

    echo strtoupper($fkey)." : ".$fvalue."\n";
};