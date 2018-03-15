<?php namespace UKCASmith\DesignPatterns\Behavioral\Command;

use UKCASmith\DesignPatterns\Behavioral\Command\Logger;

class LightReceiver
{
    public function turnOn()
    {
        Logger::setLogger('turn on');
    }

    public function turnOff()
    {
        Logger::setLogger('turn off');
    }

    public function increaseLight()
    {
        Logger::setLogger('increase light');
    }

    public function decreaseLight()
    {
        Logger::setLogger('decrease light');
    }
}