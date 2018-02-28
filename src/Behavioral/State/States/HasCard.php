<?php namespace UKCASmith\DesignPatterns\Behavioral\State\States;

use UKCASmith\DesignPatterns\Behavioral\State\Contracts\ATMState;
use UKCASmith\DesignPatterns\Behavioral\State\Contracts\ATMActions;

class HasCard implements ATMState, ATMActions
{
    const CORRECT_PIN = '1234';

    protected $atmMachine;

    /**
     * HasCard constructor.
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
        return 'You cannot enter more than one card.';
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
        if ($pinEntered !== static::CORRECT_PIN) {
            $this->atmMachine->setATMState($this->atmMachine->getNoCardState());
            return 'Wrong PIN - Card Ejected!';
        }

        $this->atmMachine->setATMState($this->atmMachine->getCorrectPinState());
        return 'Correct PIN';
    }

    /**
     * Request cash action.
     *
     * @param $cashToWithdraw
     * @return string
     */
    public function requestCash($cashToWithdraw)
    {
        return 'Enter PIN first';
    }
}