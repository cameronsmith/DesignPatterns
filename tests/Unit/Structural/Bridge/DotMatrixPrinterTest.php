<?php

use PHPUnit\Framework\TestCase;
use UKCASmith\DesignPatterns\Structural\Bridge\Formatters\CsvFormat;
use UKCASmith\DesignPatterns\Structural\Bridge\Formatters\HtmlFormat;
use UKCASmith\DesignPatterns\Structural\Bridge\Formatters\PlainFormat;
use UKCASmith\DesignPatterns\Structural\Bridge\Formatters\EdiFormat;
use UKCASmith\DesignPatterns\Structural\Bridge\DotMatrixPrinter;

class DotMatrixPrinterTest extends TestCase
{
    public function testWeCanBridgeToDifferentFormattersWithDotMatrix()
    {
        $printer = new DotMatrixPrinter(new HtmlFormat);
        $this->assertTrue($printer->get('test') == 'html');

        $printer->setFormatter(new CsvFormat);
        $this->assertTrue($printer->get('test') == 'csv');

        $printer->setFormatter(new EdiFormat);
        $this->assertTrue($printer->get('test') == 'edi');

        $printer->setFormatter(new PlainFormat);
        $this->assertTrue($printer->get('test') == 'plain');
    }
}