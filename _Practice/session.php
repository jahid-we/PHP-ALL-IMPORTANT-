<?php

if ("POST" == $_SERVER['REQUEST_METHOD']) {
    $plainText = file_get_contents("php://input");
    $plainArray = json_decode($plainText, true);
    $username = $plainArray['username'];
    session_start();
    $_SESSION['username'] = $username;
    echo "Success";
}

if("GET" == $_SERVER['REQUEST_METHOD']){
    session_start();
    echo $_SESSION['username'];
}

if("DELETE" == $_SERVER['REQUEST_METHOD']){
     session_start();
     unset ($_SESSION['username']);
     session_destroy();
     echo "session Destroyed"; 

}
