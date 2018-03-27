<?php

use UKCASmith\DesignPatterns\Creational\Builder\Director;
use UKCASmith\DesignPatterns\Creational\Builder\OfficeDepotBuilder;
use UKCASmith\DesignPatterns\Creational\Builder\Shippers\OfficeDepot;
use UKCASmith\DesignPatterns\Creational\Builder\Shippers\Staples;
use UKCASmith\DesignPatterns\Creational\Builder\StaplesBuilder;
use PHPUnit\Framework\TestCase;

class BuilderTest extends TestCase
{
    public function testBuilderCreatesOfficeDepot() {
        $shipperBuilder = new OfficeDepotBuilder;
        $officeDepot = (new Director())->build($shipperBuilder);

        $this->assertTrue($officeDepot instanceof OfficeDepot);
    }

    public function testBuilderCreatesStaples() {
        $shipperBuilder = new StaplesBuilder;
        $staples = (new Director())->build($shipperBuilder);

        $this->assertTrue($staples instanceof Staples);
    }
}