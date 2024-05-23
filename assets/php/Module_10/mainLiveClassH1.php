<?php
// Date Time

$date=strtotime("now");
echo date("Y-m-d H:i:s",$date);


echo "\n";
echo "\n";


$dateAfter10days=strtotime("today +21 days 6 hours", $date);
echo date("Y-m-d H:i:s",$dateAfter10days);

echo "\n";
echo "\n";
// Number of week in current year
$week=date('W',$date);
echo $week;

echo "\n";
echo "\n";

$tomorrow=strtotime("tomorrow");
echo date("Y-m-d H:i:s",$tomorrow);

echo "\n";
echo "\n";

$_date=strtotime("21nd May 2024,8:30 AM");
echo date("Y-m-d H:i:s",$_date);