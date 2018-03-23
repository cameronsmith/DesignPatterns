<?php

use PHPUnit\Framework\TestCase;
use UKCASmith\DesignPatterns\Behavioral\Visitor\Alcohol;
use UKCASmith\DesignPatterns\Behavioral\Visitor\Visitors\Visitor;

class AlcoholTest extends TestCase
{
    public function testWeGetTheTaxValueForAlcohol()
    {
        $taxSystem = new Visitor;
        $alcohol = new Alcohol;
        $this->assertTrue($alcohol->accept($taxSystem) == 10.70);
    }
}