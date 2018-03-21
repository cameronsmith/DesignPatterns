<?php

use PHPUnit\Framework\TestCase;
use UKCASmith\DesignPatterns\Behavioral\NullObject\NoPlayer;

class PlayerOneTest extends TestCase
{
    public function testWeCanControlNoPlayer()
    {
        $noPlayer = new NoPlayer();
        $this->assertTrue($noPlayer->left() === null);
        $this->assertTrue($noPlayer->right() === null);
        $this->assertTrue($noPlayer->top() === null);
        $this->assertTrue($noPlayer->bottom() === null);
    }
}