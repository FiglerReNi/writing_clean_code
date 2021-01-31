<?php


class Rectangle
{
    private Point $origin;
    private int $width;
    private int $height;

    /**
     * Rectangle constructor.
     * @param $origin
     * @param $width
     * @param $height
     */
    public function __construct($origin, $width, $height)
    {
        $this->origin = $origin;
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea() :int
    {
        return $this->width * $this->height;
    }

    public function printCoordinates() :void
    {
        $topRight = $this->origin->getX() + $this->width;
        $bottomLeft = $this->origin->getY() + $this->height;
        print 'Starting Point (X)): ' . $this->origin->getX();
        print 'Starting Point (Y)): ' . $this->origin->getY();
        print 'End Point X-Axis (Top Right): ' . $topRight;
        print 'End Point Y-Axis (Bottom Left): ' . $bottomLeft;
    }

}