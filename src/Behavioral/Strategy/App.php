<?php namespace UKCASmith\DesignPatterns\Behavioral\Strategy;

use UKCASmith\DesignPatterns\Behavioral\Strategy\Contracts\Logger;

class App
{
    protected $loggerInstance;

    /**
     * App constructor.
     *
     * @param Logger $loggerInstance
     */
    public function __construct(Logger $loggerInstance)
    {
        $this->loggerInstance = $loggerInstance;
    }

    /**
     * Log data.
     *
     * @param $data
     * @return mixed
     */
    public function log($data) {
        return $this->loggerInstance->log($data);
    }
}