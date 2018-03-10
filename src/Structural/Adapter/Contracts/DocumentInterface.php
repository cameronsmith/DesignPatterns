<?php namespace UKCASmith\DesignPatterns\Structural\Adapter\Contracts;

interface DocumentInterface
{
    public function open();
    public function turnPage();
}