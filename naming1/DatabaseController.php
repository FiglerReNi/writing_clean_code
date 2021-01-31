<?php

include 'Database.php';

$connection = new Database('');
try{
    echo $connection->getClient();
}catch (Error $error){
    echo $error;
}


