<?php

use PHPUnit\Framework\TestCase;
use UKCASmith\DesignPatterns\Behavioral\Strategy\App;
use UKCASmith\DesignPatterns\Behavioral\Strategy\Loggers\LogToFile;
use UKCASmith\DesignPatterns\Behavioral\Strategy\Loggers\LogToDatabase;
use UKCASmith\DesignPatterns\Behavioral\Strategy\Loggers\LogToXWebService;

class AppTest extends TestCase
{
    public function testAppWillSwitchToDifferentLoggers() {
        $loggerResult = (new App(new LogToFile))->log('test');
        $this->assertTrue($loggerResult == 'LogToFile');

        $loggerResult = (new App(new LogToDatabase))->log('test');
        $this->assertTrue($loggerResult == 'LogToDatabase');

        $loggerResult = (new App(new LogToXWebService))->log('test');
        $this->assertTrue($loggerResult == 'LogToXWebService');
    }
}