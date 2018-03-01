<?php namespace UKCASmith\DesignPatterns\Behavioral\ChainOfResponsibility\Chains;

use UKCASmith\DesignPatterns\Behavioral\ChainOfResponsibility\Exceptions\AlarmIsNotSetException;
use UKCASmith\DesignPatterns\Behavioral\ChainOfResponsibility\MyHomeStatus;

class Alarm extends HomeChecker
{

    public function check(MyHomeStatus $home)
    {
        if (!$home->getAlarmStatus()) {
            throw new AlarmIsNotSetException('The alarm has not been set!');
        }

        $this->next($home);
    }
}