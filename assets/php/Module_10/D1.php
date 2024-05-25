<?php
// echo time();
// unix epoch
// unix timestamps

// echo date('d/F/Y');

$start = microtime(true);

factorial(100);
// sleep(2);

$end = microtime(true);

$executionTime = $end - $start;
printf("%10.8f", $executionTime);

function factorial($n)
{
    $result = 1;
    for ($i = 1; $i <= $n; $i++) {
        $result *= $i;
    }
    return $result;
}
