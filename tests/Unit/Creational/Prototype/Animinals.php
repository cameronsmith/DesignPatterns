<?php

use PHPUnit\Framework\TestCase;
use UKCASmith\DesignPatterns\Creational\Prototype\Dog;
use UKCASmith\DesignPatterns\Creational\Prototype\Cat;


class AnimalsTest extends TestCase
{
    public function testWeCanPrototypeObjects()
    {
        $prototypeCat = new Cat;
        $prototypeDog = new Dog;

        $cat = clone $prototypeCat;
        $this->assertTrue($cat instanceof $prototypeCat);

        $dog = clone $prototypeDog;
        $this->assertTrue($dog instanceof $prototypeDog);
    }

}