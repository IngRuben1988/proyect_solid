<?php


$method = $_SERVER['REQUEST_METHOD'];
$METHODS  = New Methods();

header('Content-Type: application/json');
switch($method){
    case $METHODS::API_POST:
            $_POST = json_decode(file_get_contents('php://input'),true); 
            //TODO: Post method for web api

            
        break;
    default:
        header('HTTP/1.1 405 Method not allowed');
        header('Allow: POST, GET, PUT, DELETE');
    break;
}