<?php namespace UKCASmith\DesignPatterns\Behavioral\Observer\Observers;

use UKCASmith\DesignPatterns\Behavioral\Observer\Contracts\Observer;
use UKCASmith\DesignPatterns\Behavioral\Observer\Logger;

class SendEmail implements Observer
{
    protected $message;

    /**
     * LogData constructor.
     *
     * @param $message
     */
    public function __construct($message)
    {
        $this->message = $message;
    }

    /**
     * Show message.
     */
    public function handle()
    {
        Logger::setLogger($this->message);
    }
}