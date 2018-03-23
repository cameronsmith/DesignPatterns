<?php namespace UKCASmith\DesignPatterns\Behavioral\Visitor;

use UKCASmith\DesignPatterns\Behavioral\Visitor\Contracts\Visitee;
use UKCASmith\DesignPatterns\Behavioral\Visitor\Contracts\Visitor;

class Tobacco implements Visitee
{
    public function accept(Visitor $visitor)
    {
        return $visitor->visitTobacco($this);
    }

    public function getPrice()
    {
        return 10;
    }
}