<?php
$fruits = ['apple', 'banana', 'orange', 'grapes', 'pineapple', 'kiwi'];
$random = [
    'a' => '12',
    'b' => '13',
    'c' => '14',
    'd' => '15',
    'e' => '16',
    'f' => '17',
    '12' => '78',
    'g' => '18',

];

$newFruits1=array_slice($fruits,0,3);
$newFruits2=array_slice($fruits,3,null,true);
$newFruits3=array_merge($newFruits1,$newFruits2);
print_r($newFruits3);
$newFruits4=$newFruits1+$newFruits2;
print_r($newFruits4);
