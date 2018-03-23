<?php

use PHPUnit\Framework\TestCase;
use UKCASmith\DesignPatterns\Behavioral\Visitor\Tobacco;
use UKCASmith\DesignPatterns\Behavioral\Visitor\Visitors\Visitor;

class TobaccoTest extends TestCase
{
    public function testWeGetTheTaxValueForTobacco()
    {
        $taxSystem = new Visitor;
        $tobacco = new Tobacco;
        $this->assertTrue($tobacco->accept($taxSystem) == 10.90);
    }
}