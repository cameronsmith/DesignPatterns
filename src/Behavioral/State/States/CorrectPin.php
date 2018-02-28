<?php namespace UKCASmith\DesignPatterns\Behavioral\State\States;

use UKCASmith\DesignPatterns\Behavioral\State\Contracts\ATMState;
use UKCASmith\DesignPatterns\Behavioral\State\Contracts\ATMActions;

class CorrectPin implements ATMState, ATMActions
{
    protected $atmMachine;

    /**
     * CorrectPin constructor.
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
       return 'You cannot enter more than one card';
    }

    /**
     * Eject an atm card action.
     *
     * @return string
     */
    public function ejectCard()
    {
        $this->atmMachine->setATMState($this->atmMachine->getNoCardState());
        return 'Card ejected';
    }

    /**
     * Insert pin action.
     *
     * @param $pinEntered
     * @return string
     */
    public function insertPin($pinEntered)
    {
        return 'Already entered correct pin';
    }

    /**
     * Request cash action.
     *
     * @param $cashToWithdraw
     * @return string
     */
    public function requestCash($cashToWithdraw)
    {
        if ($cashToWithdraw > $this->atmMachine->getAtmCashBalance()) {
            $this->atmMachine->setATMState($this->atmMachine->getNoCardState());

            return 'Not enough money in the atm';
        }

        $this->atmMachine->setAtmCashBalance($this->atmMachine->getAtmCashBalance() - $cashToWithdraw);
        $this->atmMachine->setATMState($this->atmMachine->getNoCardState());

        if ($this->atmMachine->getAtmCashBalance() == 0) {
            $this->atmMachine->setATMState($this->atmMachine->getOutOfMoneyState());
        }

        return 'Card ejected';
    }
}