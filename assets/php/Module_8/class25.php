<?php
$newString="Hello World ";
/* echo $newString[0];
echo $newString[1];
echo $newString[2];
echo $newString[3];
echo $newString[4]; */

$newstr= substr($newString,0,5);

for($i=0;$i<strlen($newstr);$i++){
    echo $newstr[$i];
};

// echo strrev($newString);
// echo strpos($newString,"W");
// echo str_replace("World","Jahid",$newString);
// print_r(str_split($newString));
// echo trim($newString);