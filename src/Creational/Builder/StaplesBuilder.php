<?php namespace UKCASmith\DesignPatterns\Creational\Builder;

use UKCASmith\DesignPatterns\Creational\Builder\Shippers\Staples;
use UKCASmith\DesignPatterns\Creational\Builder\Contracts\Builder;
use UKCASmith\DesignPatterns\Creational\Builder\Labels\SSCC;
use UKCASmith\DesignPatterns\Creational\Builder\Edi\Edi997;
use UKCASmith\DesignPatterns\Creational\Builder\Edi\Edi810;
use UKCASmith\DesignPatterns\Creational\Builder\PackingLists\Standard;

class StaplesBuilder implements Builder
{
    protected $staples;

    public function __construct()
    {
        $this->staples = new Staples;
    }

    public function addLabels()
    {
        $this->staples->setShippingLabels(new SSCC);
    }

    public function addEdiDocuments()
    {
        $this->staples->setEdiDocuments(new Edi997);
        $this->staples->setEdiDocuments(new Edi810);
    }

    public function addPackingList()
    {
        $this->staples->setPackingLists(new Standard);
    }

    public function getShipper()
    {
        return $this->staples;
    }
}