<?php namespace UKCASmith\DesignPatterns\Structural\Decorator\ServiceDecorators;

use UKCASmith\DesignPatterns\Structural\Decorator\Contracts\CarService;

class TireChangeDecorator implements CarService
{
    protected $carService;

    /**
     * OilChangeDecorator constructor.
     *
     * @param CarService $carService
     */
    public function __construct(CarService $carService)
    {
        $this->carService = $carService;
    }

    /**
     * Get car service.
     * 
     * @return integer
     */
    public function getCost()
    {
        return $this->carService->getCost() + 55;
    }
}