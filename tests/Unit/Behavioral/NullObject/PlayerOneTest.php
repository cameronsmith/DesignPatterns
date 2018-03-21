<?php

use PHPUnit\Framework\TestCase;
use UKCASmith\DesignPatterns\Behavioral\NullObject\PlayerOne;

class PlayerOneTest extends TestCase
{
    public function testWeCanControlPlayerOne()
    {
        $playerOne = new PlayerOne();
        $this->assertTrue($playerOne->left() == 'left');
        $this->assertTrue($playerOne->right() == 'right');
        $this->assertTrue($playerOne->top() == 'top');
        $this->assertTrue($playerOne->bottom() == 'bottom');
    }
}