<?php
$student=array(
    "Jahid",
    "Hasan",
    "Abdul",
    "Bonna",
    "Ratul",
    "Malik"
);
$student[]="Kadir Bro";
// $student[2]="Abir Hasan";
array_unshift($student,"Habib Bro");

for($i=0; $i<count($student);$i++){
    echo $student[$i]."\n";
}

// var_dump($student);

/* array_shift();
array_unshift();
array_pop();
array_push(); */



