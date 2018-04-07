<?php
/**
 * Created by PhpStorm.
 * User: cameron
 * Date: 07/04/18
 * Time: 16:51
 */

namespace UKCASmith\DesignPatterns\Behavioral\Interpreter\Contracts;

interface CompoundExpression
{
    public function add(Expression $expression);
}