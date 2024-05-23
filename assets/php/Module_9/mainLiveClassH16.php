<?php
function add(){
    $arg=func_get_args();
    $sum=0;
    foreach($arg as $value){
        $sum+=$value;
    }
    return $sum;
}
$sum=add(20,222,22,555,22,2);
echo $sum;