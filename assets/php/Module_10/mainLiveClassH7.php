<?php
$Person=[
    'fname'=>'Jahid',
    'lname'=>'Hasan',
    'age'=>20,
    'city'=>'Brahmanbaria'
];

$jsone=json_encode($Person);
echo $jsone;

echo "\n";
echo "\n";

$jsond=json_decode($jsone,true);
print_r($jsond);

echo "\n";
echo "\n";

$serialized=serialize($Person);
echo $serialized;

echo "\n";
echo "\n";

$unserialized=unserialize($serialized);
print_r($unserialized);

echo "\n";
echo "\n";

