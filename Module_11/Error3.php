<?php
class MyException extends Exception{}; 
class NetworkException extends Exception{};

function testExceptions(){
    throw new MyException();
}

try{
    testExceptions();
}catch(MyException $e){
    echo trim(" MyException caught ");
}