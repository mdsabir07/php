<?php
echo ini_get("error_log");
$headers = "From: system@server.com \r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
// error_log("This is an error message");

$date = date("Y:m:d H:j:s");
error_log("{$date} Log in a new file 1 \n",3,"\xampp\htdocs\php> php tail -f logs\php_error_log");