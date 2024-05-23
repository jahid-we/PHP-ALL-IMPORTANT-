<?php
function isEven($x)
{
    if ($x % 2 == 0) {
        return true;
    }
    return false;
};

function fectorial(int $n){
   /*  if(gettype($n)!="integer"){
        return "Invalid/ String";
    } */
    $result=1;
    for($i=$n;$i>1;$i--){
        $result *=$i;
    }
    return $result;
    
};

function calculate($mark){
    if($mark>=80 && $mark <= 100){
        return "A+";
    }elseif($mark >=70 && $mark <80){
        return "A";
    }elseif($mark >=60 && $mark <70){
        return "A-";
    }elseif($mark >=50 && $mark <60){
        return "B";
    }elseif($mark >=40 && $mark <50){
        return "C";
    }elseif($mark >=33 && $mark <40){
        return "D";
    }else{
        return "F";
    }
}