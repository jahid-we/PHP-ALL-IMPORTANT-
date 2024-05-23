<?php
declare(strict_types=1);
include_once "all function.php";

$mathMarks = [
    'Jahid' => 55,
    'Abir'  => 85,
    'Hasan' => 88,
    'Kadir' => 58,
    'Bonna' => 47,
    'Bonnu' => 66
];

/* $jahidBro=$mathMarks['Jahid'];
$grade=calculate($jahidBro);
echo $grade; */

foreach($mathMarks as $name => $marks){
    $grade = calculate($marks);
     echo "$name got $grade and his mark is $marks \n";
 }


















/* $jahidsMark=$mathMarks['Jahid'];

if($jahidsMark>=80 && $jahidsMark <= 100){
    echo "A+";
}elseif($jahidsMark >=70 && $jahidsMark <80){
    echo "A";
}elseif($jahidsMark >=60 && $jahidsMark <70){
    echo "A-";
}elseif($jahidsMark >=50 && $jahidsMark <60){
    echo "B";
}elseif($jahidsMark >=40 && $jahidsMark <50){
    echo "C";
}elseif($jahidsMark >=33 && $jahidsMark <40){
    echo "D";
}else{
    echo "F";
} */

