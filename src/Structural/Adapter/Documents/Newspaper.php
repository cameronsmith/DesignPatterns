<?php namespace UKCASmith\DesignPatterns\Structural\Adapter\Documents;

use UKCASmith\DesignPatterns\Structural\Adapter\Contracts\DocumentInterface;

class Newspaper implements DocumentInterface
{
    /**
     * Open a page.
     *
     * @return string
     */
    public function open()
    {
        return 'open newspaper';
    }

    /**
     * Turn a page.
     * 
     * @return string
     */
    public function turnPage()
    {
        return 'turn newspaper';
    }

}