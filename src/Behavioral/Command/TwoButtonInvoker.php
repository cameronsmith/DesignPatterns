<?php namespace UKCASmith\DesignPatterns\Behavioral\Command;

use UKCASmith\DesignPatterns\Behavioral\Command\Contracts\Command;

class TwoButtonInvoker
{
    protected $buttonOne;
    protected $buttonTwo;

    /**
     * TwoButtonInvoker constructor.
     *
     * @param Command $button1Command
     * @param Command $button2Command
     */
    public function __construct(Command $button1Command, Command $button2Command)
    {
        $this->buttonOne = $button1Command;
        $this->buttonTwo = $button2Command;
    }

    /**
     * Press button1.
     */
    public function pressButtonOne() {
        $this->buttonOne->execute();
    }

    /**
     * Press button2.
     */
    public function pressButtonTwo() {
        $this->buttonTwo->execute();
    }
}