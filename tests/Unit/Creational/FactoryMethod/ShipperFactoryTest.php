<?php

use PHPUnit\Framework\TestCase;
use UKCASmith\DesignPatterns\Creational\FactoryMethod\ShipperFactory;
use UKCASmith\DesignPatterns\Creational\FactoryMethod\Shippers\Ups;
use UKCASmith\DesignPatterns\Creational\FactoryMethod\Shippers\Fedex;
use UKCASmith\DesignPatterns\Creational\FactoryMethod\Exceptions\InvalidShipperRequestedException;

class ShipperFactoryTest extends TestCase
{
    public function testCanRequestUpsFromFactory()
    {
        $shipper = ShipperFactory::make(ShipperFactory::UPS);
        $this->assertTrue($shipper instanceof Ups);
    }

    public function testCanRequestFedexFromFactory()
    {
        $shipper = ShipperFactory::make(ShipperFactory::FEDEX);
        $this->assertTrue($shipper instanceof Fedex);
    }

    public function testInvalidRequestThrowsAnException()
    {
        $this->expectException(InvalidShipperRequestedException::class);
        ShipperFactory::make(99);
    }
}