<?php
/**
 * Created by PhpStorm.
 * User: cameron
 * Date: 22/03/18
 * Time: 20:52
 */

namespace UKCASmith\DesignPatterns\Behavioral\Visitor\Contracts;

use UKCASmith\DesignPatterns\Behavioral\Visitor\Contracts\Visitee;

interface Visitor
{
    public function visitFood(Visitee $object);
    public function visitAlcohol(Visitee $object);
    public function visitTobacco(Visitee $object);
}