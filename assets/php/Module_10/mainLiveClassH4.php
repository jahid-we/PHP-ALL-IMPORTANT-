<?php
$date = new DateTime('now', new DateTimeZone('Asia/Dhaka'));
echo $date->format('Y-m-d g:i:s a');

echo "\n";
echo "\n";

$timeStamp = $date->getTimestamp();
echo $timeStamp;

echo "\n";
echo "\n";

// data From TimeStamp
$date1 = new DateTime('@' . $timeStamp);
echo $date1->format('Y-m-d g:i:s a');

echo "\n";
echo "\n";

$date2 = date('Y-m-d g:i:s a', $timeStamp);
echo $date2;

echo "\n";
echo "\n";

$date->add(new DateInterval('P5Y5M5D'));
echo $date->format('Y-m-d g:i:s a');

echo "\n";
echo "\n";

$date->sub(new DateInterval('P2Y5M5D'));
echo $date->format('Y-m-d g:i:s a');