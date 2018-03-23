<?php namespace UKCASmith\DesignPatterns\Behavioral\Visitor;

use UKCASmith\DesignPatterns\Behavioral\Visitor\Contracts\Visitee;
use UKCASmith\DesignPatterns\Behavioral\Visitor\Contracts\Visitor;

class Food implements Visitee
{
    public function accept(Visitor $visitor)
    {
        return $visitor->visitFood($this);
    }

    public function getPrice()
    {
        return 10;
    }
}