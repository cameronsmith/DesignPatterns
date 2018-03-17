<?php

use PHPUnit\Framework\TestCase;
use UKCASmith\DesignPatterns\Creational\AbstractFactory\Ui\Buttons\LinuxButton;
use UKCASmith\DesignPatterns\Creational\AbstractFactory\Ui\Buttons\WindowsButton;
use UKCASmith\DesignPatterns\Creational\AbstractFactory\Ui\Buttons\MacButton;
use UKCASmith\DesignPatterns\Creational\AbstractFactory\Ui\Dialogs\LinuxDialog;
use UKCASmith\DesignPatterns\Creational\AbstractFactory\Ui\Dialogs\WindowsDialog;
use UKCASmith\DesignPatterns\Creational\AbstractFactory\Ui\Dialogs\MacDialog;
use UKCASmith\DesignPatterns\Creational\AbstractFactory\Factories\LinuxFactory;
use UKCASmith\DesignPatterns\Creational\AbstractFactory\Factories\MacFactory;
use UKCASmith\DesignPatterns\Creational\AbstractFactory\Factories\WindowsFactory;

class AbstractFactoryTest extends TestCase
{
    public function testCanRequestWindowsFromFactory()
    {
        $dialog = WindowsFactory::makeDialog();
        $button = WindowsFactory::makeButton();

        $this->assertTrue($dialog instanceof WindowsDialog);
        $this->assertTrue($button instanceof WindowsButton);
    }

    public function testCanRequestMacFromFactory()
    {
        $dialog = MacFactory::makeDialog();
        $button = MacFactory::makeButton();

        $this->assertTrue($dialog instanceof MacDialog);
        $this->assertTrue($button instanceof MacButton);
    }

    public function testCanRequestLinuxFromFactory()
    {
        $dialog = LinuxFactory::makeDialog();
        $button = LinuxFactory::makeButton();

        $this->assertTrue($dialog instanceof LinuxDialog);
        $this->assertTrue($button instanceof LinuxButton);
    }
}