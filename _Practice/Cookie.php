<?php
if ("POST" == $_SERVER['REQUEST_METHOD']) {
    $plainText = file_get_contents("php://input");
    $plainArray = json_decode($plainText, true);
    $username = $plainArray['username'];
    setcookie("username", $username, ["expires" => time() + 3600]);
    echo "Cookie Success";
}

if ("GET" == $_SERVER['REQUEST_METHOD']) {
    echo $_COOKIE['username'];
}

if ("DELETE" == $_SERVER['REQUEST_METHOD']) {
    setcookie("username", "", ["expires" => time() - 3600]);
    echo "Cookie Delete Success";
}
