<?php namespace UKCASmith\DesignPatterns\Structural\Adapter\Other;

use UKCASmith\DesignPatterns\Structural\Adapter\Contracts\eReaderInterface;

class Kindle implements eReaderInterface
{
    /**
     * Turn on the eReader.
     *
     * @return string
     */
    public function turnOn() {
        return 'turn on';
    }

    /**
     * Skip to the next page.
     *
     * @return string
     */
    public function pressNextButton() {
        return 'pressed next button';
    }
}