<?php
// Index AArray *****************************
$array1 = [11, 22, 33, 55, 88, 44, 55, 2, 9, 6, 54, 44];
// echo $array1[5];

// For Loop Through an Index Array *************************

for ($i = 0; $i < count($array1); $i++) {

   echo $array1[$i] . "\n";
}

echo "\n";
echo "\n";

foreach ($array1 as $item) {
   // echo $item."\n";
}
