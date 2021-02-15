<?php

function initApp(){
    try{
        connectDatabase();
    }catch (Error $e){
        showError($e);
    }
}

function connectDatabase()
{
    //side effects
    $didConnect = $database->connect();
    if(!$didConnect){
        throw new Error('Could not connect to database!');
    }
}

function determineSupportAgent($ticket)
{
    global $agent;
    if($ticket->requestType === 'unknown'){
        //lehet side effect mögötte - de csak név alapján nem várjuk
        $agent = findStandardAgent();
    }
    //lehet side effect mögötte - de csak név alapján nem várjuk
    $agent = findAgentByRequestType($ticket->requestType);
    return $agent;
}

function createUser($email, $password)
{
    if(!isValid($email, $password)){
        showError('Invalid input!');
    }
}

function isValid($email, $password)
{
    if(strpos($email, '@') > -1 || count($password) < 7){
        return false;
    }
    return true;
}

function showError($message){
    echo $message;
}


