<?php
$websiteData=file_get_contents('http://postman-echo.com/get?from=ostad');
// echo $websiteData;

// file_put_contents('website.txt',$websiteData,FILE_APPEND);

$jsonFile=json_decode($websiteData,true);
print_r($jsonFile);




if(file_exists('person.txt')){
    unlink('person.txt');
    echo "File Deleted";

}