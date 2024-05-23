<?php
// Performance Check In ms

$startTime=microtime(true);

for($i=0;$i<50;$i++){
    echo "Jahid Hasan \n";
}
$endTime=microtime(true);

$executionTime=($endTime -$startTime)*1000;

echo "Execution Time: {$executionTime} ms";