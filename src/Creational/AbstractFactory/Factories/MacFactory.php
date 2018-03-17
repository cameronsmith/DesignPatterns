<?php namespace UKCASmith\DesignPatterns\Creational\AbstractFactory\Factories;

use UKCASmith\DesignPatterns\Creational\AbstractFactory\Contracts\AbstractOSFactory;
use UKCASmith\DesignPatterns\Creational\AbstractFactory\Ui\Dialogs\MacDialog;
use UKCASmith\DesignPatterns\Creational\AbstractFactory\Ui\Buttons\MacButton;

class MacFactory implements AbstractOSFactory
{

    /**
     * Make Mac Dialog.
     *
     * @return MacDialog
     */
    public static function makeDialog()
    {
        return new MacDialog;
    }

    /**
     * Make mac button.
     *
     * @return MacButton
     */
    public static function makeButton()
    {
        return new MacButton;
    }
}