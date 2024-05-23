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

// $someFruits=array_slice($fruits,2);
// $someFruits=array_slice($fruits,2,3);
// $someFruits=array_slice($fruits,2,-1);
// $someFruits=array_slice($fruits,2,4,true);
// print_r($someFruits);

$randomData = array_slice($random, 3,null,true);
// $randomData = array_slice($random, 3);
print_r($randomData);
