<?php namespace UKCASmith\DesignPatterns\Structural\Bridge\Formatters;

use UKCASmith\DesignPatterns\Structural\Bridge\Contracts\FormatterInterface;

class PlainFormat implements FormatterInterface
{

    /**
     * Get html format.
     * 
     * @param $text
     * @return string
     */
    public function format($text)
    {
        return 'plain';
    }
}