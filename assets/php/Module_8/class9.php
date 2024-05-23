<?php
$student=[
    'fname' => 'Jahid',
    'lname' => 'Hasan',
    'Class' => '12',
    'Roll'  => '25',
    'section' => 'B',
];
print_r($student);
unset($student['Roll']);
print_r($student);