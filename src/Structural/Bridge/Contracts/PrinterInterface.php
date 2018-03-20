<?php
/**
 * Created by PhpStorm.
 * User: cameron
 * Date: 20/03/18
 * Time: 20:45
 */

namespace UKCASmith\DesignPatterns\Structural\Bridge\Contracts;

use UKCASmith\DesignPatterns\Structural\Bridge\Contracts\FormatterInterface;

interface PrinterInterface
{
    public function setFormatter(FormatterInterface $formatter);
    public function get($text);
}