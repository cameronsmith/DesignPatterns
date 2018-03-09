<?php namespace UKCASmith\DesignPatterns\Behavioral\Strategy\Loggers;

use UKCASmith\DesignPatterns\Behavioral\Strategy\Contracts\Logger;

class LogToXWebService implements Logger
{
    public function log($data) {
        return 'LogToXWebService';
    }
}