<?php namespace UKCASmith\DesignPatterns\Structural\Adapter\Documents;

use UKCASmith\DesignPatterns\Structural\Adapter\Contracts\DocumentInterface;

class Book implements DocumentInterface
{
    /**
     * Open a page.
     *
     * @return string
     */
    public function open()
    {
        return 'open book';
    }

    /**
     * Turn a page.
     *
     * @return string
     */
    public function turnPage()
    {
        return 'turn page';
    }

}