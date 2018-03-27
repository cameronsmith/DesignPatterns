<?php namespace UKCASmith\DesignPatterns\Creational\Builder\Shippers;

abstract class Shipper
{
    protected $labels = [];
    protected $ediDocuments = [];
    protected $packingLists = [];

    public function setShippingLabels($label)
    {
        $this->labels[] = $label;
    }

    public function setEdiDocuments($edi)
    {
        $this->ediDocuments[] = $edi;
    }

    public function setPackingLists($document)
    {
        $this->packingLists[] = $document;
    }

    public function getShippingLabels()
    {
        return $this->labels;
    }

    public function getEdiDocuments()
    {
        return $this->ediDocuments;
    }

    public function getPackingLists()
    {
        return $this->packingLists;
    }
}