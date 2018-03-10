<?php

use PHPUnit\Framework\TestCase;
use UKCASmith\DesignPatterns\Structural\Decorator\ServiceDecorators\BrakesChangeDecorator;
use UKCASmith\DesignPatterns\Structural\Decorator\ServiceDecorators\OilChangeDecorator;
use UKCASmith\DesignPatterns\Structural\Decorator\ServiceDecorators\TireChangeDecorator;
use UKCASmith\DesignPatterns\Structural\Decorator\BasicCarService;

class BasicCarServiceTest extends TestCase
{
    public function testWeCanGetTotalCostWithDecorators() {
        $totalCost = (new TireChangeDecorator(new OilChangeDecorator(new BrakesChangeDecorator(new BasicCarService))))->getCost();
        $this->assertTrue($totalCost == 200);
    }
}