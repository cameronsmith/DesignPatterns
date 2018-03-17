<?php namespace UKCASmith\DesignPatterns\Creational\AbstractFactory\Contracts;

interface AbstractOSFactory
{
    public static function makeDialog();
    public static function makeButton();
}