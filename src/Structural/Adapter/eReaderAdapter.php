<?php namespace UKCASmith\DesignPatterns\Structural\Adapter;

use UKCASmith\DesignPatterns\Structural\Adapter\Contracts\DocumentInterface;
use UKCASmith\DesignPatterns\Structural\Adapter\Contracts\eReaderInterface;

class eReaderAdapter implements DocumentInterface
{
    protected $eReaderInstance;

    public function __construct(eReaderInterface $eReader)
    {
        $this->eReaderInstance = $eReader;
    }

    /**
     * Open eReader.
     *
     * @return mixed
     */
    public function open()
    {
        return $this->eReaderInstance->turnOn();
    }

    /**
     * Turn the page of an eReader.
     *
     * @return mixed
     */
    public function turnPage()
    {
        return $this->eReaderInstance->pressNextButton();
    }

}