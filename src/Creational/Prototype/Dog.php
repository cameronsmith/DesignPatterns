<?php namespace UKCASmith\DesignPatterns\Creational\Prototype;

use UKCASmith\DesignPatterns\Creational\Prototype\Contracts\Cloneable;

class Dog implements Cloneable
{

    public function __clone()
    {
        // Implement things to when cloned.
    }
}