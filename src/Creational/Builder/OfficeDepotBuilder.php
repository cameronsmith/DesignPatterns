<?php namespace UKCASmith\DesignPatterns\Creational\Builder;

use UKCASmith\DesignPatterns\Creational\Builder\Shippers\OfficeDepot;
use UKCASmith\DesignPatterns\Creational\Builder\Contracts\Builder;
use UKCASmith\DesignPatterns\Creational\Builder\Labels\UCC128;
use UKCASmith\DesignPatterns\Creational\Builder\Edi\Edi997;
use UKCASmith\DesignPatterns\Creational\Builder\Edi\Edi856;
use UKCASmith\DesignPatterns\Creational\Builder\PackingLists\Standard;

class OfficeDepotBuilder implements Builder
{
    protected $officeDepot;

    public function __construct()
    {
        $this->officeDepot = new OfficeDepot;
    }

    public function addLabels()
    {
        $this->officeDepot->setShippingLabels(new UCC128);
    }

    public function addEdiDocuments()
    {
        $this->officeDepot->setEdiDocuments(new Edi997);
        $this->officeDepot->setEdiDocuments(new Edi856);
    }

    public function addPackingList()
    {
        $this->officeDepot->setPackingLists(new Standard);
    }

    public function getShipper()
    {
        return $this->officeDepot;
    }
}