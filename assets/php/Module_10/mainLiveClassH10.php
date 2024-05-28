<?php
$fp=fopen('D:\web application\PHP\assets\php\Module_10\fruits.txt','r');

// $fruits=fread($fp,filesize('D:\web application\PHP\assets\php\Module_10\fruits.txt'));
// echo $fruits;


while($line=fgets($fp)){
    echo "\n".$line."\n";
    
    echo str_repeat('-',20);
}

echo str_repeat("Jahid \n",20);