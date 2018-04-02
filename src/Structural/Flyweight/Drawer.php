<?php namespace UKCASmith\DesignPatterns\Structural\Flyweight;

use UKCASmith\DesignPatterns\Structural\Flyweight\Contracts\Flyweight;

class Drawer implements Flyweight
{

    protected $color;

    public function __construct($color)
    {
        $this->color;
    }

    /**
     * The extrinsic state (unique part of the object)
     *
     * @param $width
     * @param $height
     * @param $xPosition
     * @param $yPosition
     */
    public function draw($width, $height, $xPosition, $yPosition)
    {
        return $this->color;
    }
}