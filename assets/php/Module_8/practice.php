<?php
$strings = ["Hello", "World", "PHP", "Programming"];

foreach ($strings as $string) {
    $countVowel = vowel($string);
    printf("Original String: %s, Vowel Count: %s, Reversed String: %s \n", $string, $countVowel, strrev($string));
}
function vowel($vowel){
    $vowelArray = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
    $count = 0;
    foreach (str_split($vowel) as $chr) {
        if (in_array($chr, $vowelArray)) {
            $count++;
        }
    }
    return $count;
}
