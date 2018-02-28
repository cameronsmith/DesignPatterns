<?php

use PHPUnit\Framework\TestCase;
use UKCASmith\DesignPatterns\Behavioral\State\ATM;
use UKCASmith\DesignPatterns\Behavioral\State\States\HasCard;
use UKCASmith\DesignPatterns\Behavioral\State\States\NoCard;
use UKCASmith\DesignPatterns\Behavioral\State\States\OutOfMoney;
use UKCASmith\DesignPatterns\Behavioral\State\States\CorrectPin;

class ATMTest extends TestCase
{
    public function testAtmStatesCorrectlyChange() {
        $atm = new ATM;

        $atm->insertCard();
        $atm->ejectCard();
        $this->assertTrue($atm->getATMState() instanceof NoCard);

        $atm->insertCard();
        $this->assertTrue($atm->getATMState() instanceof HasCard);
        $atm->insertPin('1234');
        $this->assertTrue($atm->getATMState() instanceof CorrectPin);
        $atm->RequestCash(100);
        $this->assertTrue($atm->getATMState() instanceof NoCard);
    }

    public function testAtmStateOutOfMoneyChangesWhenAllFundsAreGone() {
        $atm = new ATM;

        $atm->insertCard();
        $atm->insertPin('1234');
        $atm->RequestCash(200);
        $this->assertTrue($atm->getATMState() instanceof OutOfMoney);
    }

}