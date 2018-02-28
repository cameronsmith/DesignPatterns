<?php namespace UKCASmith\DesignPatterns\Behavioral\State;

use UKCASmith\DesignPatterns\Behavioral\State\States\CorrectPin;
use UKCASmith\DesignPatterns\Behavioral\State\States\NoCard;
use UKCASmith\DesignPatterns\Behavioral\State\States\HasCard;
use UKCASmith\DesignPatterns\Behavioral\State\States\OutOfMoney;
use UKCASmith\DesignPatterns\Behavioral\State\Contracts\ATMState;
use UKCASmith\DesignPatterns\Behavioral\State\Contracts\ATMActions;

class ATM implements ATMActions
{
    protected $hasCardStateInstance;
    protected $noCardStateInstance;
    protected $correctPinStateInstance;
    protected $outOfMoneyStateInstance;

    protected $currentAtmState;
    protected $cashInMachine = 200;

    /**
     * ATM constructor.
     */
    public function __construct()
    {
        $this->hasCardStateInstance = new HasCard($this);
        $this->noCardStateInstance = new NoCard($this);
        $this->correctPinStateInstance = new CorrectPin($this);
        $this->outOfMoneyStateInstance = new OutOfMoney($this);

        $this->currentAtmState = $this->noCardStateInstance;

        if (!$this->doesAtmHaveCash()) {
            $this->currentAtmState = $this->outOfMoneyStateInstance;
        }
    }

    /**
     * Set the ATM current state.
     *
     * @param ATMState $atmState
     */
    public function setATMState(ATMState $atmState) {
        $this->currentAtmState = $atmState;
    }

    /**
     * Get the ATM current state.
     *
     * @return OutOfMoney
     */
    public function getATMState() {
        return $this->currentAtmState;
    }

    /**
     * Get the has card state.
     *
     * @return HasCard
     */
    public function getHasCardState() {
        return $this->hasCardStateInstance;
    }

    /**
     * Get the no card start.
     *
     * @return NoCard
     */
    public function getNoCardState() {
        return $this->noCardStateInstance;
    }

    /**
     * Get the correct pin state.
     *
     * @return CorrectPin
     */
    public function getCorrectPinState() {
        return $this->correctPinStateInstance;
    }

    /**
     * Get the out of money state.
     *
     * @return OutOfMoney
     */
    public function getOutOfMoneyState() {
        return $this->outOfMoneyStateInstance;
    }

    /**
     * Does the atm have any money?
     *
     * @return bool
     */
    public function doesAtmHaveCash() {
        return !($this->getAtmCashBalance() < 0);
    }

    /**
     * Get the atm cash value.
     *
     * @return int
     */
    public function getAtmCashBalance() {
        return $this->cashInMachine;
    }

    /**
     * Set the amount of money in the atm.
     *
     * @param $cash
     */
    public function setAtmCashBalance($cash) {
        $this->cashInMachine = $cash;
    }

    /**
     * Insert an atm card.
     *
     * @return string
     */
    public function insertCard()
    {
        return $this->currentAtmState->insertCard();
    }

    /**
     * Eject an atm card.
     *
     * @return string
     */
    public function ejectCard()
    {
        return $this->currentAtmState->ejectCard();
    }

    /**
     * Insert an atm pin.
     *
     * @param $pinEntered
     * @return string
     */
    public function insertPin($pinEntered)
    {
        return $this->currentAtmState->insertPin($pinEntered);
    }

    /**
     * Request cash to withdraw
     *
     * @param $cashToWithdraw
     * @return string
     */
    public function requestCash($cashToWithdraw)
    {
        return $this->currentAtmState->requestCash($cashToWithdraw);
    }
}