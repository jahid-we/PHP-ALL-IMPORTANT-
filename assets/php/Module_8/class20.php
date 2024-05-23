<?php
// $numbers=[1, 2, 3, 4, 5, 6, 7, 8, 9, 10,11,12];

/* $num=[];
for($i=10;$i<=20;$i++){
    array_push($num,$i);
};
print_r($num); */

/* $rangeNum=range(10,30,3);
print_r($rangeNum); */

foreach(range(0,25,2) as $evenNumber){
    if($evenNumber>0){
        echo $evenNumber."\n";
    };
    
}