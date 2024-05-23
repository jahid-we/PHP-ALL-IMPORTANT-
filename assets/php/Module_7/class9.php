<?php
//  recursion Function *****************

function printN($i){
    if($i>10){
        return;
    };
    echo $i."\n";
    $i+=2;
    printN($i);
}
printN(0);



/* function printN(int $counter,int $end){
    if($counter>$end){
        return;  
    }
     echo $counter."\n";
        $counter++;
        printN($counter,$end);
}
printN(15,30); */

/* function printN(int $counter,int $end,int $stepping=1){
    if($counter>$end){
        return;  
    }
     echo $counter."\n";
        $counter+=$stepping;
        printN($counter,$end,$stepping);
}
printN(0,30,7); */

