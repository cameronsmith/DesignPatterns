<?php namespace UKCASmith\DesignPatterns\Behavioral\Observer\Contracts;

use UKCASmith\DesignPatterns\Behavioral\Observer\Contracts\Observer;

interface Subject
{
    public function attach(Observer $observer);
    public function detach(Observer $observer);
    public function notify();
}