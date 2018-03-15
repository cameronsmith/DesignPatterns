<?php namespace UKCASmith\DesignPatterns\Behavioral\Command\Contracts;

use UKCASmith\DesignPatterns\Behavioral\Command\Contracts\Command;

interface Invoker
{
    public function setCommand(Command $command);
}