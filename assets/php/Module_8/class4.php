<?php

/* $student=[
    '54' => "Hasan",
    '55' => "Jahid",
    '25' => "Abir",
    '14' => "Bonna"
];

echo $student[54]; */

$food = [
    'vagetable' => "Potato, Onion, Tomato",
    'fruit' => "Apple, Banana, Orange",
    'drinks' => "Water, Milk, Tea"
];
$food['drinks']=$food['drinks'].",7UP";
$food['drinks'] .=", Mojo";

// echo $food['vagetable'];
foreach ($food as $kname => $vname) {
    printf("%s : %s \n", $kname, $vname);
}

/* $keys=array_keys($food);
// print_r($keys);
for($i=0;$i<count($keys);$i++){
    $key=$keys[$i];
    echo $food[$key]."\n";
} */

// print_r array_values() array_keys() ******************************************************