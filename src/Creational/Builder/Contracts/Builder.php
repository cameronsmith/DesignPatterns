<?php
/**
 * Created by PhpStorm.
 * User: cameron
 * Date: 26/03/18
 * Time: 22:21
 */

namespace UKCASmith\DesignPatterns\Creational\Builder\Contracts;

interface Builder
{
    public function addLabels();
    public function addEdiDocuments();
    public function addPackingList();
    public function getShipper();
}