<?php

for ($i = 20; $i <= 40; $i++) {


    /*  if ($i % 13==0) {
        echo $i;
        echo PHP_EOL;
        break;
    } */

    if ($i < 30) {
        continue;
    }
    echo $i;
    echo PHP_EOL;
}
