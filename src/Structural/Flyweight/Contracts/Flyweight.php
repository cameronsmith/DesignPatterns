<?php namespace UKCASmith\DesignPatterns\Structural\Flyweight\Contracts;

interface Flyweight
{
    public function draw($width, $height, $xPosition, $yPosition);
}