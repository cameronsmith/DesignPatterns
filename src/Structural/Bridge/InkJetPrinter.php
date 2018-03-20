<?php namespace UKCASmith\DesignPatterns\Structural\Bridge;

use UKCASmith\DesignPatterns\Structural\Bridge\Contracts\PrinterInterface;
use UKCASmith\DesignPatterns\Structural\Bridge\Contracts\FormatterInterface;

class InkJetPrinter implements PrinterInterface
{

    protected $formatter;

    public function __construct(FormatterInterface $formatter)
    {
        $this->setFormatter($formatter);
    }

    public function setFormatter(FormatterInterface $formatter)
    {
        $this->formatter = $formatter;
    }

    public function get($text)
    {
        return $this->formatter->format($text);
    }
}