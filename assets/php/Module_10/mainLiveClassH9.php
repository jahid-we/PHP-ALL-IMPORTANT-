<?php
$Person=[
    'fname'=>'Jahid',
    'lname'=>'Hasan',
    'age'=>20,
    'city'=>'Brahmanbaria',
    'hobbies'=>["cricket","volleyball","football"]
];

$jsonData=json_encode($Person);
// echo $jsonData;

file_put_contents('person.txt', "\n".$jsonData, FILE_APPEND);

// unlink('person.txt');
/* if(file_exists('person.txt')){
    unlink('person.txt');
    echo "File Deleted";

} */