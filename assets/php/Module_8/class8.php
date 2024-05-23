<?php
$student=[
    'fname' => 'Jahid',
    'lname' => 'Hasan',
    'Class' => '12',
    'Roll'  => '25',
    'section' => 'B',
];

$newStudent=&$student;
$newStudent['lname']='Bro';

print_r($newStudent);
print_r($student);

// Copy By Value / Deep Copy ***********************

// Copy By Reference (  &  ) ***********************