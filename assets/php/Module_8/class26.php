<?php
$newString= "Hello World";
$length=strlen($newString)-1;

/* for($i=$length;$i>=0;$i--){
    echo $newString[$i];
} */

echo strrev($newString);