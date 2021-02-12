<?php

function addId($user1){
    $user1['id'] = '2';
}
$user1 = ['name'=> 'Max'];
addId($user1);
var_dump($user1);

include 'User3.php';
$user3 = new User3("FReni");
$user3->addId();
var_dump($user3);