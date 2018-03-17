<?php namespace UKCASmith\DesignPatterns\Creational\AbstractFactory\Factories;

use UKCASmith\DesignPatterns\Creational\AbstractFactory\Contracts\AbstractOSFactory;
use UKCASmith\DesignPatterns\Creational\AbstractFactory\Ui\Buttons\WindowsButton;
use UKCASmith\DesignPatterns\Creational\AbstractFactory\Ui\Dialogs\WindowsDialog;

class WindowsFactory implements AbstractOSFactory
{

    /**
     * Make windows dialog
     *
     * @return WindowsDialog
     */
    public static function makeDialog()
    {
        return new WindowsDialog;
    }

    /**
     * Make windows button.
     *
     * @return WindowsButton
     */
    public static function makeButton()
    {
        return new WindowsButton;
    }
}