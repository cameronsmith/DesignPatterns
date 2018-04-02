<?php

use PHPUnit\Framework\TestCase;
use UKCASmith\DesignPatterns\Structural\Flyweight\FlyweightFactory;

class DrawerTest extends TestCase
{
    public function testTheFlyweightReturnsSameObjectForSameIntrinsicState()
    {
        $red = FlyweightFactory::make('red');
        $blue = FlyweightFactory::make('blue');
        $green = FlyweightFactory::make('green');
        $green1 = FlyweightFactory::make('green');

        $this->assertTrue(spl_object_hash($red) != spl_object_hash($blue));
        $this->assertTrue(spl_object_hash($green) === spl_object_hash($green1));
    }
}