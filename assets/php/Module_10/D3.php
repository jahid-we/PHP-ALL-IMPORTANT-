<?php
echo time();

echo "\n";
echo "\n";

echo mktime(0,0,0,4,1,2024);
echo "\n";
echo "\n";
date_default_timezone_set("Asia/Dhaka");
echo mktime(0,0,0,4,1,2024)."\n";
echo gmmktime(0,0,0,4,1,2024)."\n";