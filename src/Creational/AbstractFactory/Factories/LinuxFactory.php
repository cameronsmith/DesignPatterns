<?php namespace UKCASmith\DesignPatterns\Creational\AbstractFactory\Factories;

use UKCASmith\DesignPatterns\Creational\AbstractFactory\Contracts\AbstractOSFactory;
use UKCASmith\DesignPatterns\Creational\AbstractFactory\Ui\Buttons\LinuxButton;
use UKCASmith\DesignPatterns\Creational\AbstractFactory\Ui\Dialogs\LinuxDialog;

class LinuxFactory implements AbstractOSFactory
{

    /**
     * Make linux dialog
     *
     * @return LinuxDialog
     */
    public static function makeDialog()
    {
        return new LinuxDialog;
    }

    /**
     * Make linux button.
     *
     * @return LinuxButton
     */
    public static function makeButton()
    {
        return new LinuxButton;
    }
}