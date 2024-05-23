<?php
$fileName = "D:\web application\PHP\assets\php\Module 6\class1.php";
if (is_readable($fileName)) {


    /* $fp=fopen($fileName,'r');

while($line=fgets($fp)){
    echo $line;
}

rewind($fp);

while($line=fgets($fp)){
    echo $line;
}
fclose($fp); */

// $data1=file($fileName);
// print_r($data1);



    $data = file_get_contents($fileName);
    echo $data;
}
