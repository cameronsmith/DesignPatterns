<?php namespace UKCASmith\DesignPatterns\Behavioral\ChainOfResponsibility\Chains;

use UKCASmith\DesignPatterns\Behavioral\ChainOfResponsibility\Exceptions\LocksAreNotLockedException;
use UKCASmith\DesignPatterns\Behavioral\ChainOfResponsibility\MyHomeStatus;

class Locks extends HomeChecker
{

    public function check(MyHomeStatus $home)
    {
        if (!$home->getLockStatus()) {
            throw new LocksAreNotLockedException('Locks have not been locked!');
        }
        $this->next($home);
    }
}