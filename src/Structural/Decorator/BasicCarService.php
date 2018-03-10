<?php namespace UKCASmith\DesignPatterns\Structural\Decorator;

use UKCASmith\DesignPatterns\Structural\Decorator\Contracts\CarService;

class BasicCarService implements CarService
{
    public function getCost()
    {
        return 25;
    }
}