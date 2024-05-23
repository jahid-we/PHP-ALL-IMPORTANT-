<?php
$data=file_get_contents('d:/web application/PHP/assets/php/Module_10/data.txt');
// echo $data;
$unserialized_Data=unserialize($data);
print_r($unserialized_Data);
