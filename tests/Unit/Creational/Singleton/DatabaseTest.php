<?php

use PHPUnit\Framework\TestCase;
use UKCASmith\DesignPatterns\Creational\Singleton\Database;

class DatabaseTest extends TestCase
{
    public function testSingletonIsBeingApplied()
    {
        $database1 = Database::getInstance();
        $database2 = Database::getInstance();

        $this->assertTrue($database1 === $database2);
    }

}