<?php namespace UKCASmith\DesignPatterns\Behavioral\State\States;

use UKCASmith\DesignPatterns\Behavioral\State\Contracts\ATMState;
use UKCASmith\DesignPatterns\Behavioral\State\Contracts\ATMActions;

class NoCard implements ATMState, ATMActions
{
    protected $atmMachine;

    /**
     * NoCard constructor.
     *
     * @param $atmMachine
     */
    public function __construct($atmMachine)
    {
        $this->atmMachine = $atmMachine;
    }

    /**
     * Insert an atm card action.
     *
     * @return string
     */
    public function insertCard()
    {
        $this->atmMachine->setAtmState($this->atmMachine->getHasCardState());
        return 'Please enter a PIN';
    }

    /**
     * Eject an atm card action.
     *
     * @return string
     */
    public function ejectCard()
    {
        return 'No card to eject';
    }

    /**
     * Insert pin action.
     *
     * @param $pinEntered
     * @return string
     */
    public function insertPin($pinEntered)
    {
        return 'Enter card first';
    }

    /**
     * Request cash action.
     *
     * @param $cashToWithdraw
     * @return string
     */
    public function requestCash($cashToWithdraw)
    {
        return 'Enter card first';
    }
}