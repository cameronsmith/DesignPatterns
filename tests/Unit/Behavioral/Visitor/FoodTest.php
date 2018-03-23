<?php

use PHPUnit\Framework\TestCase;
use UKCASmith\DesignPatterns\Behavioral\Visitor\Food;
use UKCASmith\DesignPatterns\Behavioral\Visitor\Visitors\Visitor;

class FoodTest extends TestCase
{
    public function testWeGetTheTaxValueForAlcohol()
    {
        $taxSystem = new Visitor;
        $food = new Food;
        $this->assertTrue($food->accept($taxSystem) == 10.20);
    }
}