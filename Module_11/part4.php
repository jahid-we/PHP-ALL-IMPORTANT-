<?php

// JSON -> REQUEST RESPONSE

if ("POST" == $_SERVER['REQUEST_METHOD']) {
    $plainText = file_get_contents("php://input");
    $plainArray = json_decode($plainText, true);
    $sum = $plainArray['num1'] + $plainArray['num2'];
    $sub = $plainArray['num1'] - $plainArray['num2'];
    $mul = $plainArray['num1'] * $plainArray['num2'];
    $div = $plainArray['num1'] / $plainArray['num2'];
    $result = ["sum" => $sum, "sub" => $sub, "mul" => $mul, "div" => $div];
    $_json = json_encode($result, JSON_PRETTY_PRINT);
    echo $_json;
}
