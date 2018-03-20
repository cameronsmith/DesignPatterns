<?php
/**
 * Created by PhpStorm.
 * User: cameron
 * Date: 20/03/18
 * Time: 20:44
 */

namespace UKCASmith\DesignPatterns\Structural\Bridge\Contracts;


interface FormatterInterface
{
    public function format($text);
}