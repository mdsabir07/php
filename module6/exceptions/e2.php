<?php

class MyException extends Exception{}
class NetworkException extends Exception{}

function testExceptions(){
    throw new NetworkException();
}

try{
    testExceptions();
}catch(MyException $e){
    echo "MyExeption caught";
}catch(NetworkException $e){
    echo "NetworkException caught";
}catch(Exception $e){
    echo "Exception caught";
}finally{
    echo "\nCleaned up!";
}