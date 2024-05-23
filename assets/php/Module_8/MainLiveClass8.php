<?php
$message = "A quick brown fox jumps over the lazy dog";
// echo ucwords($message);
// echo ucfirst($message);

// Title Case , camelCase, snake_case, kebab-case, PascalCase, UpperCamelCase, lowerCamelCase, SCREAMING_SNAKE_CASE

/* $character=str_split($message,2);
print_r($character); */

/* $characterCount=[];
$character=str_split($message);
foreach($character as $char){

 if(isset($characterCount[$char])){
    $characterCount[$char]++;
 }else{
    $characterCount[$char]=1;
 }

}

print_r($characterCount); */

//  Find

/* $message1="Hello Ostad";
echo strpos($message1,"Ostad"); */

//  Replace

$message2 = "Hello Ostad";
// encrypt string

function encrypt($message2)
{
    $newMessage = str_split($message2);
    $newMessage1 = "";
    foreach ($newMessage as $char) {
        $newMessage1 .= chr(ord($char) + 1);
    }
    return $newMessage1;
}
echo encrypt($message2);

echo "\n";
echo "\n";


function decrypt($message2)
{
    $newMessage = str_split($message2);
    $newMessage1 = "";
    foreach ($newMessage as $char) {
        $newMessage1 .= chr(ord($char) - 1);
    }
    return $newMessage1;
}
echo decrypt("Ifmmp!Ptube");
