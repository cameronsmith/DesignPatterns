<?php namespace UKCASmith\DesignPatterns\Behavioral\Visitor\Contracts;

use UKCASmith\DesignPatterns\Behavioral\Visitor\Contracts\Visitor;

/**
 * Interface Visitable
 *
 * @package UKCASmith\DesignPatterns\Behavioral\Visitor\Contracts
 */
interface Visitee
{
    public function accept(Visitor $visitor);
    public function getPrice();
}