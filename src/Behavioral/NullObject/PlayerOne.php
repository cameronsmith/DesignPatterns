<?php namespace UKCASmith\DesignPatterns\Behavioral\NullObject;

use UKCASmith\DesignPatterns\Behavioral\NullObject\Contracts\PlayerMovement;

class PlayerOne implements PlayerMovement
{

    public function right()
    {
        return 'right';
    }

    public function left()
    {
        return 'left';
    }

    public function top()
    {
        return 'top';
    }

    public function bottom()
    {
        return 'bottom';
    }
}