<?php
$fName = "Jahid";
$lNmae = "Hasan";
printf('His Name is %2$s %1$s', $lNmae, $fName);

echo PHP_EOL;
// Variable Sowaping********************************** %2$s %1$s  "%07.2f ++++

//printf('The binary equivalent of %1$d is %1$b', 12);

$output = sprintf('The binary equivalent of %1$d is %1$b', 12);
echo strtoupper($output);

echo PHP_EOL;


$x = 45;
printf( "Price: "."%.2f", $x);

echo PHP_EOL;

$m = 123;
$n = 27.54858;

printf("%05d \n", $m);
printf("%05d \n", $n);

echo PHP_EOL;

printf("%07.2f \n", $m);
printf("%07.2f \n", $n);

echo PHP_EOL;
