<?php
// echo "Hello";
// echo PHP_EOL;
// echo 123;

// $name="Jahid Hasan";
// var_dump($name);
// echo PHP_EOL;
// $age=21;
// var_dump($age);

$name1 = "Jahid";
$name2 = "Hasan";
var_dump($name1, $name2);
echo PHP_EOL;

/* 
   Integer Int

   Double / Float

   Boolean  [true/false]

   String [""]

   NULL

   Array

   Object

   Resource

*/

$result = true;
var_dump($result);
echo PHP_EOL;

$name = "Earth";
echo "We're Living On {$name} \n";

printf("We're Living On %s \n", strtoupper($name));
printf("We're Living On %s \n", strtolower($name));

$fName = "Jahid";
$lName = "Hasan";
printf("His %s Name Is %s %s \n", "Full", $fName, $lName);

echo "My
Name
Is
Jahid
Hasan";
