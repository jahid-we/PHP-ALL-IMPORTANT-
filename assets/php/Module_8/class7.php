<?php
$student=[
    'fname' => 'Jahid',
    'lname' => 'Hasan',
    'Class' => '12',
    'Roll'  => '25',
    'section' => 'B',
];
print_r($student);
// printf("%s %s",$student['fname'],$student['lname']);


// echo join(',',$student);
$serialized=serialize($student);
echo $serialized;
echo PHP_EOL;
echo PHP_EOL;
$newserializrd=unserialize($serialized);
print_r($newserializrd);

$jsonData=json_encode($student);
echo $jsonData;
$newJson=json_decode($jsonData,true);
print_r($newJson);
