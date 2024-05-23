<?php
$date1=new DateTime('now',new DateTimeZone('Asia/Dhaka'));
$date2=new DateTime('2023-03-14 20:00:00');
// echo $date1->format('M');

// $difference=$date1->diff($date2);

// echo $difference->format('%Y years %m Months %d days');

echo $date1->format('Y-m-d g:i:s a');
echo "\n";
echo "\n";

$date1->add (new DateInterval('P2Y5M10D'));
echo $date1->format('Y-m-d g:i:s a');

$difference=$date2->diff($date1);

echo $difference->format('%R%a days');