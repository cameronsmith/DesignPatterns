<?php namespace UKCASmith\DesignPatterns\Behavioral\Command\Commands;

use UKCASmith\DesignPatterns\Behavioral\Command\Contracts\Command;
use UKCASmith\DesignPatterns\Behavioral\Command\LightReceiver;

class TurnLightOnCommand implements Command
{
    protected $receiver;

    /**
     * TurnLightOnCommand constructor.
     *
     * @param $receiver
     */
    public function __construct($receiver)
    {
        $this->receiver = $receiver;
    }

    /**
     * Execute command.
     */
    public function execute()
    {
        $this->receiver->turnOn();
    }

    /**
     * Roll back command.
     */
    public function unexecute()
    {
        $this->receiver->turnOff();
    }
}