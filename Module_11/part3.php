<?php

if ("POST" == $_SERVER['REQUEST_METHOD']) {
    echo "POST REQUEST FOUND";
}
if ("GET" == $_SERVER['REQUEST_METHOD']) {
    echo "GET REQUEST FOUND";
}
if ("PUT" == $_SERVER['REQUEST_METHOD']) {
    echo "PUT REQUEST FOUND";
}
if ("DELETE" == $_SERVER['REQUEST_METHOD']) {
    echo "DELETE REQUEST FOUND";
}
if ("PATCH" == $_SERVER['REQUEST_METHOD']) {
    echo "PATCH REQUEST FOUND";
}

