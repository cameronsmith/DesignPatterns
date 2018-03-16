<?php

namespace UKCASmith\DesignPatterns\Creational\FactoryMethod\Contracts;

interface Factory
{
    public static function make($request);
}