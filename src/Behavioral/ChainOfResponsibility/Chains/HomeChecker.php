<?php namespace UKCASmith\DesignPatterns\Behavioral\ChainOfResponsibility\Chains;

use UKCASmith\DesignPatterns\Behavioral\ChainOfResponsibility\MyHomeStatus;

abstract class HomeChecker
{
    protected $successor;

    public abstract function check(MyHomeStatus $home);

    /**
     * Set the next successor in the chain.
     *
     * @param HomeChecker $successor
     * @return HomeChecker
     */
    public function setSuccessor(HomeChecker $successor) {
        $this->successor = $successor;
    }

    /**
     * Call the next successor, if it exists.
     *
     * @param MyHomeStatus $home
     */
    public function next(MyHomeStatus $home) {
        if ($this->successor) {
            $this->successor->check($home);
        }
    }
}