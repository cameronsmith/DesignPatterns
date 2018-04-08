<?php

use PHPUnit\Framework\TestCase;
use UKCASmith\DesignPatterns\Behavioral\Interpreter\ConversionContext;
use UKCASmith\DesignPatterns\Behavioral\Interpreter\Interpreter;
use UKCASmith\DesignPatterns\Behavioral\Interpreter\Expressions\Miles;
use UKCASmith\DesignPatterns\Behavioral\Interpreter\Expressions\Kilometers;
use UKCASmith\DesignPatterns\Behavioral\Interpreter\Expressions\Meters;
use UKCASmith\DesignPatterns\Behavioral\Interpreter\Expressions\Measurements;

class ConversionContextTest extends TestCase
{
    public function testConversionLanguage()
    {
        $conversionContext = new ConversionContext('1 mile to kilometers');
        $miles = new Miles;
        $kilometers = new Kilometers;
        $meters = new Meters;

        $measurements = (new Measurements)->add($miles)->add($kilometers)->add($meters);

        $interpreter = new Interpreter($measurements);

        $conversion = $interpreter->interpret($conversionContext);

        $this->assertTrue($conversion === '1 kilometer to miles = 1.60934');
    }
}