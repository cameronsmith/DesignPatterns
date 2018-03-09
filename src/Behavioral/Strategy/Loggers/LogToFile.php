<?php namespace UKCASmith\DesignPatterns\Behavioral\Strategy\Loggers;

use UKCASmith\DesignPatterns\Behavioral\Strategy\Contracts\Logger;

class LogToFile implements Logger
{
    public function log($data) {
        return 'LogToFile';
    }
}