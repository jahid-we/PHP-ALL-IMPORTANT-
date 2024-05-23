<?php
$fruits=['apple', 'banana','f'=>'orange', 'g'=>'grapes', 'a'=>'pineapple','kiwi','grapefruit'];
// sort($fruits);
// asort($fruits);
// krsort($fruits);
sort($fruits,SORT_STRING);
print_r($fruits);

$numbers=[11, 22, 33, 44, 55,40,91,1,2,55, 66, 77, 88, 99];
// sort($numbers);
// asort($numbers);
// ksort($numbers);
// krsort($numbers);
sort($numbers,SORT_STRING);
print_r($numbers);
// foreach($numbers as $number){
//     echo $number . "\n";
// };

$random=['Apple','apple','Orange','orange','Banana','banana'];
sort($random,SORT_STRING|SORT_FLAG_CASE); 
print_r($random);


