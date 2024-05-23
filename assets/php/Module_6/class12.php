<?php
$n = 10;

switch ($n % 2) {
    case 0:
        echo " {$n} is a Even Number";
        break;
    default:
        echo "{$n} is Odd Number";
}

echo "\n";

$color = "red";
switch ($color) {
    case "black":
    case "red":
    case "blue":
        printf(ucwords($color) . " is Our Favourite Color.");
        break;
    default:
        printf(ucwords($color) . " is not our Favourite color .");
}
