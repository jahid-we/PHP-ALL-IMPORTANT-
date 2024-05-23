<?php
// Cookies Store

if ("POST" == $_SERVER['REQUEST_METHOD']) {
    $plainText = file_get_contents("php://input");
    $plainArray = json_decode($plainText, true);
    $userName = $plainArray['username'];
    setcookie("username", $userName, ["expires" => time() + 3600]);
    echo " Cookie success";
}

// Cookies Read 


if ("GET" == $_SERVER['REQUEST_METHOD']) {
    
    echo $_COOKIE['username'];
}



//  Cookie Delete

if ("DELETE" == $_SERVER['REQUEST_METHOD']) {

    setcookie("username", "", ["expires" => time() - 3600]);
    echo "Cookie Delete success";
}
