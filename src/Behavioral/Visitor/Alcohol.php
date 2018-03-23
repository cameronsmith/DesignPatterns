<?php namespace UKCASmith\DesignPatterns\Behavioral\Visitor;

use UKCASmith\DesignPatterns\Behavioral\Visitor\Contracts\Visitee;
use UKCASmith\DesignPatterns\Behavioral\Visitor\Contracts\Visitor;

class Alcohol implements Visitee
{
    public function accept(Visitor $visitor)
    {
        return $visitor->visitAlcohol($this);
    }

    public function getPrice()
    {
        return 10;
    }
}