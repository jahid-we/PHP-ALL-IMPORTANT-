<?php
$Person=[
    'fname'=>'Jahid',
    'lname'=>'Hasan',
    'age'=>20,
    'city'=>'Brahmanbaria',
    'hobbies'=>["cricket","volleyball","football"]
];

$jsonEncode=json_encode($Person,JSON_PRETTY_PRINT);

file_put_contents('person1.txt',$jsonEncode,FILE_APPEND);

if(file_exists('person1.txt')){
    unlink('person1.txt');
    echo "File Deleted";
}