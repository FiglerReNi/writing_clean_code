<?php
/*Hibás elnevezések*/

include 'Entity.php';

$summery = 'cím';
$desc = 'regény';
$publish = date("Y-m-d");

$item = new Entity($summery, $desc, $publish);

function output($item){
    print 'Title: ' . $item->title;
    print 'Description: ' . $item->description;
    print 'Published: ' . $item->ymdhm;
}

output($item);
