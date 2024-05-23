<?php
$number1=[1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$number2=[2, 4, 6, 8, 10, 12, 14, 16, 18, 20];
$common=array_intersect($number1,$number2);
print_r($common);


$fruits1=['a'=>'apple','b'=>'banana','c'=>'orange','m'=>'grapes','e'=>'pineapple','f'=>'kiwi'];
$fruits2=['b'=>'banana','c'=>'orange','d'=>'grapes','f'=>'kiwi','l'=>'grapefruit'];

// $common2=array_intersect($fruits1,$fruits2);
$common2=array_intersect_assoc($fruits1,$fruits2);
print_r($common2);


$differents=array_diff($number1,$number2);
print_r($differents);

// $differents2=array_diff($fruits1,$fruits2);
$differents2=array_diff_assoc($fruits1,$fruits2);
$differents3=array_diff_assoc($fruits2,$fruits1);
print_r($differents2);
print_r($differents3);