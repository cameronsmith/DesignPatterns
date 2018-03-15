<?php namespace UKCASmith\DesignPatterns\Behavioral\Command\Contracts;

interface Command
{
    public function execute();
    public function unexecute();
}