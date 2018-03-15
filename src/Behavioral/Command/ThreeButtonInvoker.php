<?php namespace UKCASmith\DesignPatterns\Behavioral\Command;

use UKCASmith\DesignPatterns\Behavioral\Command\Contracts\Command;

class ThreeButtonInvoker
{
    protected $buttonOne;
    protected $buttonTwo;
    protected $buttonThree;

    /**
     * TwoButtonInvoker constructor.
     *
     * @param Command $button1Command
     * @param Command $button2Command
     */
    public function __construct(Command $button1Command, Command $button2Command, Command $button3Command)
    {
        $this->buttonOne = $button1Command;
        $this->buttonTwo = $button2Command;
        $this->buttonThree = $button3Command;
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

    /**
     * Press button3.
     */
    public function pressButtonThree() {
        $this->buttonThree->execute();
    }
}