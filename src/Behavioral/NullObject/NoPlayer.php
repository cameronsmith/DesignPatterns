<?php namespace UKCASmith\DesignPatterns\Behavioral\NullObject;

use UKCASmith\DesignPatterns\Behavioral\NullObject\Contracts\PlayerMovement;

class NoPlayer implements PlayerMovement
{

    public function right()
    {
        return null;
    }

    public function left()
    {
        return null;
    }

    public function top()
    {
        return null;
    }

    public function bottom()
    {
        return null;
    }
}