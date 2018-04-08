<?php
/**
 * Created by PhpStorm.
 * User: cameron
 * Date: 07/04/18
 * Time: 16:45
 */

namespace UKCASmith\DesignPatterns\Behavioral\Interpreter\Contracts;

interface Expression
{
    public function solve(array $context);
}