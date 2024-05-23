<?php
$string="Hello World, How Are You?";
// print_r(str_split($string));

$parts=explode(" ",$string);

print_r($parts);

echo "\n";
echo "\n";

// implode / join 

$original=implode(" ",$parts);
echo $original;

echo "\n";
echo "\n";
/* $parts3=strtok($string,", ");
while($parts3 !== false){
    echo $parts3."\n";
    $parts3=strtok(", ");
}; */

$parts3=preg_split('/(, |,)/',$string);
print_r($parts3);  