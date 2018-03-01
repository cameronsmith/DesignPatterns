<?php namespace UKCASmith\DesignPatterns\Behavioral\ChainOfResponsibility\Chains;

use UKCASmith\DesignPatterns\Behavioral\ChainOfResponsibility\Exceptions\LightsAreStillOnException;
use UKCASmith\DesignPatterns\Behavioral\ChainOfResponsibility\MyHomeStatus;

class Lights extends HomeChecker
{

    public function check(MyHomeStatus $home)
    {
        if ($home->getLightsStatus()) {
            throw new LightsAreStillOnException('Lights are still on!');
        }
        $this->next($home);
    }
}