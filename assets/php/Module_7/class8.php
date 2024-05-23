<?php
/* function sum (...$num):int{
    $result=0;
    for($i=0;$i<count($num);$i++){
     $result +=$num[$i];
    }
    return $result;
}
 echo sum(25,25,545,8585); */

//  CLEAN fUNCTION / BEST PRACTICE OF CODING ****************************

function doTaskA()
{
    echo "Task A Done \n";
}
function doTaskB()
{
    echo "Task B Done \n";
}
function doTaskC()
{
    echo "Task C Done \n";
}
function doTaskD()
{
    echo "Task D Done \n";
}
function doTaskE()
{
    echo "Task E Done \n";
}

function call()
{

    doTaskA();
    doTaskB();
    doTaskC();
    doTaskD();
    doTaskE();
};
call();
