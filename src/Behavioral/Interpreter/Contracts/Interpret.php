<?php namespace UKCASmith\DesignPatterns\Behavioral\Interpreter\Contracts;

use UKCASmith\DesignPatterns\Behavioral\Interpreter\Contracts\Expression;

interface Interpret
{
    public function __construct(Expression $expression);
    public function interpret(Context $context);
}