<?php

use PHPUnit\Framework\TestCase;
use UKCASmith\DesignPatterns\Behavioral\Observer\Login;
use UKCASmith\DesignPatterns\Behavioral\Observer\Observers\LogData;
use UKCASmith\DesignPatterns\Behavioral\Observer\Observers\SendEmail;

class LoginTest extends TestCase
{
    public function testLoginWillNotifyAllObservers() {
        $login = new Login;

        $login->attach(new LogData('logdata'))->attach(new SendEmail('sendemail'));

        $login->auth();
    }
}