<?php
$num = range(40, 72);

// echo sizeof($num);

$random=mt_rand(0,32);
// echo $num[$random]."\n";
if($num[$random]%2==0){
    echo "Head";
}else{
    echo "Tail";
}


/* $luck = $num[mt_rand(0, 32)];
if ($luck % 2 == 0) {
    echo "Head";
} else {
    echo "Tail";
}
echo "\n";
echo "\n"; */

/* shuffle($num);

// print_r($num);

$randomNumbers = $num[3];

echo $randomNumbers; */
