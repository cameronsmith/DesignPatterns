<?php namespace UKCASmith\DesignPatterns\Creational\Builder;

use UKCASmith\DesignPatterns\Creational\Builder\Contracts\Builder;
use UKCASmith\DesignPatterns\Creational\Builder\Contracts\Director as DirectorIntreface;

class Director implements DirectorIntreface
{
    public function build(Builder $builder)
    {
        $builder->addEdiDocuments();
        $builder->addLabels();
        $builder->addPackingList();

        return $builder->getShipper();
    }
}