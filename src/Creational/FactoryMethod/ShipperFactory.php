<?php namespace UKCASmith\DesignPatterns\Creational\FactoryMethod;

use UKCASmith\DesignPatterns\Creational\FactoryMethod\Exceptions\InvalidShipperRequestedException;
use UKCASmith\DesignPatterns\Creational\FactoryMethod\Shippers\Ups;
use UKCASmith\DesignPatterns\Creational\FactoryMethod\Shippers\Fedex;

class ShipperFactory
{
    const UPS = 1;
    const FEDEX = 2;

    /**
     * Return requested object.
     *
     * @param $request
     * @return Fedex|Ups
     * @throws InvalidShipperRequestedException
     */
    public static function make($request)
    {
        switch ($request) {
            case static::UPS:
                return new Ups;
                break;

            case static::FEDEX:
                return new Fedex;
                break;

            default:
                throw new InvalidShipperRequestedException('No valid shipper requested.');
                break;
        }
    }
}