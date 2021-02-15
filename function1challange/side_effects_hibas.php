<?php

function connectDatabase()
{
    //side effects
    $didConnect = $database->connect();
    if($didConnect){
        return true;
    } else{
        //side effect - javítandó
        echo 'Could not connect to database!';
        return false;
    }
}

function determineSupportAgent($ticket)
{
    $agent = '';
    if($ticket->requestType === 'unknown'){
        //lehet side effect mögötte
        $agent = findStandardAgent();
    }
    //lehet side effect mögötte
    $agent = findAgentByRequestType($ticket->requestType);
    return $agent;
}

function isValid($email, $password)
{
    if(strpos($email, '@') > -1 || count($password) < 7){
        //side effect  - javítandó
        echo 'Invalid input!';
        return false;
    }
    return true;
}