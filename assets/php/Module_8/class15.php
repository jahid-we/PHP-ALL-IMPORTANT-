<?php
$fruits = ['apple', 'banana', 'orange', 'grapes', 'pineapple', 'kiwi'];
$random = [12, 13, 14, 15, "29", 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 46, 47, 48, 49, 50];
if (in_array(29, $random, true)) {
    echo "Yes \n";
} else {
    echo "No \n";
};

$offset=array_search(15, $random, true);
echo $offset;

if(key_exists('b',$fruits)){
    echo "Yes \n";
}else{
    echo "No \n";
};
