<?php

$n = 20;
switch ($n % 2) {
    case 0:
        switch ($n) {
            case $n > 0:
                echo "{$n} is a Positive Even Number .";
                break;
            case $n < 0:
                echo "{$n} is a Negative Even Number .";
                break;
        }
        break;
    default:
        switch ($n) {
            case $n > 0:
                echo "{$n} is a Positive Odd Number .";
                break;
            case $n < 0:
                echo "{$n} is a Negative Odd Number .";
                break;
        }
}

echo PHP_EOL;

if ($n % 2 == 0 && $n >= 0) {
    echo "{$n} is a Positive Even Number .";
} elseif ($n % 2 == 0 && $n < 0) {
    echo "{$n} is a Negative Even Number .";
} elseif ($n % 2 != 0 && $n > 0) {
    echo "{$n} is a Positive Odd Number .";
} elseif ($n % 2 != 0 && $n < 0) {
    echo "{$n} is a Negative Odd Number .";
} else;
