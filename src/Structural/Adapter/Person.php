<?php namespace UKCASmith\DesignPatterns\Structural\Adapter;

use UKCASmith\DesignPatterns\Structural\Adapter\Contracts\DocumentInterface;

class Person
{
    protected $documentInstance;

    /**
     * Person constructor.
     *
     * @param DocumentInterface $document
     */
    public function __construct(DocumentInterface $document)
    {
        $this->documentInstance = $document;
    }

    /**
     * Open a document.
     *
     * @return mixed
     */
    public function openDocument() {
        return $this->documentInstance->open();
    }

    /**
     * Turn a page.
     *
     * @return mixed
     */
    public function turnPage() {
        return $this->documentInstance->turnPage();
    }
}