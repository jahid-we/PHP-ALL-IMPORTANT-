<?php
//  Array To String

$fruits=["apple","banana","orange","mango","pineapple"];
$allFruits=implode(",",$fruits);
echo $allFruits;

echo "\n";
echo "\n";

$sllFruits1=$fruits[0].",".$fruits[1].",".$fruits[2].",".$fruits[3].",".$fruits[4];
echo $sllFruits1;

echo "\n";
echo "\n";

$allFruits3=serialize($fruits);
echo $allFruits3;

echo "\n";

$allfr3=unserialize($allFruits3);
print_r($allfr3);

echo "\n";
echo "\n";

$allFruits4=json_encode($fruits);
echo $allFruits4;

echo "\n";

$allFrui4=json_decode($allFruits4,true);
print_r($allFrui4);

echo "\n";
echo "\n";

