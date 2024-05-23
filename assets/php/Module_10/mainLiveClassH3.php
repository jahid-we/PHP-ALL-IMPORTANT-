<?php
// timestamp


$date =new DateTime('now',new DateTimeZone('Asia/Dhaka'));

$string = $date->format('Y-m-d g:i:s a');

echo $string;

echo "\n";
echo "\n";

$timeStamp=$date->getTimestamp();
// $timeStamp=time();

echo $timeStamp;

echo "\n";
echo "\n";
// unix epoch=1st january 1970 00:00:00

// date from timestamp
$date=new DateTime('@'.$timeStamp);

echo $date->format('Y-m-d H:i:s');
echo "\n";
echo "\n";
$date1=date('Y-m-d H:i:s',$timeStamp);
echo $date1;

echo "\n";
echo "\n";

