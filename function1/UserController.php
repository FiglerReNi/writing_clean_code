<?php

include 'User1.php';
include 'User2.php';

$user1 = new User1('FReni', 25, 'teszt@email.com');
$user2 = new User2(['name'=>'FReni', 'age'=>25, 'email'=>'teszt@email.com']);

var_dump($user1);
var_dump($user2);




