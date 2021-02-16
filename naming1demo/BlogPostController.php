<?php

include 'BlogPost.php';

$title = 'cím';
$description = 'regény';
$publishDate = date("Y-m-d");

$blogPost = new BlogPost($title, $description, $publishDate);
$blogPost->print();


