<?php

include 'Rectangle.php';
include 'Point.php';

$x = 50;
$y = 100;
$width = 90;
$height = 10;

$rectangle = buildRectangle($x, $y, $width, $height);
$rectangle->printCoordinates();
print $rectangle->getArea();


function buildRectangle($x, $y, $width, $height) :Rectangle
{
    $rectangleOrigin = new Point($x ,$y);
    $rectangle = new Rectangle($rectangleOrigin, $width, $height);
    return $rectangle;
}