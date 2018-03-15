<?php

use PHPUnit\Framework\TestCase;
use UKCASmith\DesignPatterns\Behavioral\Command\TwoButtonInvoker;
use UKCASmith\DesignPatterns\Behavioral\Command\ThreeButtonInvoker;
use UKCASmith\DesignPatterns\Behavioral\Command\Commands\TurnLightOffCommand;
use UKCASmith\DesignPatterns\Behavioral\Command\Commands\TurnLightOnCommand;
use UKCASmith\DesignPatterns\Behavioral\Command\Commands\IncreaseLightCommand;
use UKCASmith\DesignPatterns\Behavioral\Command\Commands\DecreaseLightCommand;
use UKCASmith\DesignPatterns\Behavioral\Command\LightReceiver;
use UKCASmith\DesignPatterns\Behavioral\Command\Logger;

class TwoButtonInvokerTest extends TestCase
{
    public function testWeCanTestTwoButtonControl() {
        $receiver = new LightReceiver;
        $twoButtonControl = new TwoButtonInvoker(
            new TurnLightOnCommand($receiver),
            new TurnLightOffCommand($receiver)
        );

        $twoButtonControl->pressButtonOne();
        $twoButtonControl->pressButtonTwo();

        $testArray = ['turn on', 'turn off'];
        $this->assertTrue(
            $testArray == Logger::getLogger()
        );
    }

    public function testWeCanTestThreeButtonControl() {
        $receiver = new LightReceiver;
        $threeButtonControl = new ThreeButtonInvoker(
            new TurnLightOnCommand($receiver),
            new IncreaseLightCommand($receiver),
            new TurnLightOffCommand($receiver)
        );

        $threeButtonControl->pressButtonOne();
        $threeButtonControl->pressButtonTwo();
        $threeButtonControl->pressButtonThree();

        $testArray = ['turn on', 'increase light', 'turn off'];
        $this->assertTrue(
            $testArray == Logger::getLogger()
        );
    }

    protected function tearDown()
    {
        Logger::clearLogger();
        parent::tearDown();
    }
}