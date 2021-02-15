<?php

$lastAssignedId = '';
$lastAssignedId1 = [];

function generateId($username){
    $id = 'id_' . $username;
    global $lastAssignedId;
    $lastAssignedId = $id;
    global $lastAssignedId1;
    array_push($lastAssignedId1, $id);
    return $id;
}

$name = generateId('FReni');
var_dump($lastAssignedId);
var_dump($lastAssignedId1);