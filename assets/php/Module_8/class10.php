<?php
$name ="" ;

if (isset($name)) {
    echo "Name Is Set";
} else {
    echo "Not Set";
}
echo PHP_EOL;

if (empty($name)) {
    echo "No Data";
} else {
    echo "Yes";
}
echo PHP_EOL;

if(isset($name) && (is_numeric($name) || $name != '' ) ){
    echo "Name is set and it's not empty";
}else{
    echo "Name is either not empty set or it's empty";
}

//    isset / empty **************************************