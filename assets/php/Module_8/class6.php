<?php
 $food = [
    'vagetable' =>explode(',','Potato, Onion, Tomato'),
    'fruit' => explode(',','Apple, Banana, Orange'),
    'drinks' =>explode(',','Water, Milk, Tea')
];
array_push($food['drinks'],'Orange Juice');
print_r($food);

$number = [
    [11, 22, 33],
    [11, 22, 33, 44],
    [11, 22, 33, 44, 55],
    [11, 22, 33, 44, 55, 66],
];
print_r($number);
echo $number[3][2];
