<?php
$string=" A Quick brown fox jumps over the lazy dog";

 $arrayreplace=str_ireplace(['brown','fox'],['Black','Cat'],$string);
echo strtoupper($arrayreplace) ;
echo strpos($string,"fox",0);
// echo stripos($string,"fox",13);
// echo strripos($string,"fox");

// $replacestr=str_replace("Fox","Mouse",$string);
// $replacestr=str_ireplace("Fox","Mouse",$string);
/* $replacestr=str_ireplace("Fox","Mouse",$string,$total);
echo $replacestr;
echo "\n";
echo "{$total}"; 


$strinLorem="Lorem Ipsum \n is simply dummyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
// echo chunk_split($strinLorem,20,"-");
// echo wordwrap($strinLorem,32,"\n",true);
echo nl2br($strinLorem);

echo "\n";
echo "\n";

$name="Jahid 01701367333 j.hasan629578@gmail.com";
$parts=sscanf($name,"%s %11s %s");
print_r($parts); */