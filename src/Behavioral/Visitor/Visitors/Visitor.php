<?php namespace UKCASmith\DesignPatterns\Behavioral\Visitor\Visitors;

use UKCASmith\DesignPatterns\Behavioral\Visitor\Contracts\Visitee;
use UKCASmith\DesignPatterns\Behavioral\Visitor\Contracts\Visitor As VisitorInterface;

class Visitor implements VisitorInterface
{
    /**
     * Get the price + tax of food.
     *
     * @param Visitee $object
     * @return mixed
     */
    public function visitFood(Visitee $object)
    {
        return $this->getPricePlusTax($object->getPrice(), 0.02);
    }

    /**
     * Get the price + tax of alcohol.
     *
     * @param Visitee $object
     * @return mixed
     */
    public function visitAlcohol(Visitee $object)
    {
        return $this->getPricePlusTax($object->getPrice(), 0.07);
    }

    /**
     * Get the price + tax of tobacco.
     *
     * @param Visitee $object
     * @return mixed
     */
    public function visitTobacco(Visitee $object)
    {
        return $this->getPricePlusTax($object->getPrice(), 0.09);
    }

    /**
     * Get the price + tax.
     *
     * @param $price
     * @param $tax
     * @return mixed
     */
    protected function getPricePlusTax($price, $tax)
    {
        return $price + ($price * $tax);
    }

}