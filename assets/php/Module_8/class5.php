<?php
/*  $vegatable=explode(',','brinjal,potato,carrot,capsicam,tomato, brocolli');


// delimeter ****************************

// var_dump($vegatable);
// echo $vegatable[1];

$vegatableString=join(",",$vegatable);

// echo $vegatableString;
echo count($vegatable);  */

$vegatable=preg_split('/(, |,)/','brinjal,potato, carrot, capsicam,tomato, brocolli');
print_r($vegatable);

