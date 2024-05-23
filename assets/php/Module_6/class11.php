<?php
// ternary operators

$n = 12;

// $num= ($n % 2 == 0)? "{$n} is an Even Number " : "{$n} is an Odd Number";

$numberInWord = ($n == 12) ? "Twelve" : (($n == 10) ? "Ten" : (($n == 9) ? "Nine" : (($n == 8) ? "Eight" : " A Number")));
printf(strtoupper($numberInWord));
