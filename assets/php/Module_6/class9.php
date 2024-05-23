<?php
$n = 2;
// if($n % 2 == 0 ){
//     echo " $n is an Even Number";
// }else{
//     echo " $n is an Odd Number";
// }

if ($n > 0) {
    if ($n % 2 == 0) {
        echo "$n is an Even Number";
    } else {
        echo "$n is an Odd Number";
    }
} else {
    echo "You Can't Use $n Try Another Number . ";
}

echo PHP_EOL;

$food ="salmon";
if("salmon" == $food){
    echo "It has vitamin .";
}else{
    echo "oww sorry";
}



