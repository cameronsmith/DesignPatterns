<?php

use PHPUnit\Framework\TestCase;
use UKCASmith\DesignPatterns\Structural\Bridge\Formatters\CsvFormat;
use UKCASmith\DesignPatterns\Structural\Bridge\Formatters\HtmlFormat;
use UKCASmith\DesignPatterns\Structural\Bridge\Formatters\PlainFormat;
use UKCASmith\DesignPatterns\Structural\Bridge\Formatters\EdiFormat;
use UKCASmith\DesignPatterns\Structural\Bridge\InkJetPrinter;

class InkJetPrinterTest extends TestCase
{
    public function testWeCanBridgeToDifferentFormattersWithInkJet()
    {
        $printer = new InkJetPrinter(new HtmlFormat);
        $this->assertTrue($printer->get('test') == 'html');

        $printer->setFormatter(new CsvFormat);
        $this->assertTrue($printer->get('test') == 'csv');

        $printer->setFormatter(new EdiFormat);
        $this->assertTrue($printer->get('test') == 'edi');

        $printer->setFormatter(new PlainFormat);
        $this->assertTrue($printer->get('test') == 'plain');
    }
}