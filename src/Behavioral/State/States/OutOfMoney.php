<?php namespace UKCASmith\DesignPatterns\Behavioral\State\States;

use UKCASmith\DesignPatterns\Behavioral\State\Contracts\ATMState;
use UKCASmith\DesignPatterns\Behavioral\State\Contracts\ATMActions;

class OutOfMoney implements ATMState, ATMActions
{
    protected $atmMachine;

    /**
     * OutOfMoney constructor.
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
        return 'ATM has no cash';
    }

    /**
     * Eject an atm card action.
     *
     * @return string
     */
    public function ejectCard()
    {
        return 'ATM has no cash.';
    }

    /**
     * Insert pin action.
     *
     * @param $pinEntered
     * @return string
     */
    public function insertPin($pinEntered)
    {
        return 'ATM has no cash';
    }

    /**
     * Request cash action.
     *
     * @param $cashToWithdraw
     * @return string
     */
    public function requestCash($cashToWithdraw)
    {
        return 'ATM has no cash';
    }
}