<?php namespace UKCASmith\DesignPatterns\Behavioral\Observer\Observers;

use UKCASmith\DesignPatterns\Behavioral\Observer\Contracts\Observer;
use UKCASmith\DesignPatterns\Behavioral\Observer\Logger;

class LogData implements Observer
{
    protected $data;

    /**
     * LogData constructor.
     *
     * @param $data
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Show data.
     */
    public function handle()
    {
        Logger::setLogger($this->data);
    }
}