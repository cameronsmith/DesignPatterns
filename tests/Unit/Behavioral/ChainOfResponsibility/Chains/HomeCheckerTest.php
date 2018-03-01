<?php

use UKCASmith\DesignPatterns\Behavioral\ChainOfResponsibility\MyHomeStatus;
use UKCASmith\DesignPatterns\Behavioral\ChainOfResponsibility\Chains\Alarm;
use UKCASmith\DesignPatterns\Behavioral\ChainOfResponsibility\Chains\Locks;
use UKCASmith\DesignPatterns\Behavioral\ChainOfResponsibility\Chains\Lights;
use UKCASmith\DesignPatterns\Behavioral\ChainOfResponsibility\Exceptions\AlarmIsNotSetException;
use UKCASmith\DesignPatterns\Behavioral\ChainOfResponsibility\Exceptions\LocksAreNotLockedException;
use UKCASmith\DesignPatterns\Behavioral\ChainOfResponsibility\Exceptions\LightsAreStillOnException;
use PHPUnit\Framework\TestCase;

class HomeCheckerTest extends TestCase
{
    protected $chain;

    public function setUp() {
        parent::setUp();
        $alarm = new Alarm;
        $lights = new Lights;
        $locks = new Locks;

        $alarm->setSuccessor($lights);
        $lights->setSuccessor($locks);

        $this->chain = $alarm;
    }

    public function testChainWillThrowWhenLightsAreOn() {
        $myHome = (new MyHomeStatus)->alarmOn()->lock()->lightsOn();
        $this->expectException(LightsAreStillOnException::class);
        $this->chain->check($myHome);
    }

    public function testChainWillThrowWhenAlarmIsOff() {
        $myHome = (new MyHomeStatus)->alarmOff()->lock()->lightsOff();
        $this->expectException(AlarmIsNotSetException::class);
        $this->chain->check($myHome);
    }

    public function testChainWillThrowWhenHouseIsNotLocked() {
        $myHome = (new MyHomeStatus)->alarmOn()->unlock()->lightsOff();
        $this->expectException(LocksAreNotLockedException::class);
        $this->chain->check($myHome);
    }
}